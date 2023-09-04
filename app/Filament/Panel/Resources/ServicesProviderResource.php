<?php

namespace App\Filament\Panel\Resources;

use App\Filament\Panel\Resources\ServicesProviderResource\Pages;
use App\Filament\Panel\Resources\ServicesProviderResource\RelationManagers;
use App\Models\ServicesProvider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use App\Models\Service;
use App\Models\ServicesType;
use App\Models\ServicesSession;
use App\Models\ServicesZone;
use DateTime;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Facades\Filament;
use Filament\Forms\Set;
use Filament\Forms\Get;
class ServicesProviderResource extends Resource
{
    protected static ?string $model = ServicesProvider::class;
    protected static ?string $navigationIcon = 'heroicon-o-check-badge';
    protected static ?string $navigationLabel = 'الخدمات';
    protected static ?string $navigationGroup = 'إدارة الخدمات';
    protected static ?int $navigationSort = 8;

    protected static function getTitle() : string 
    {
        return 'الخدمات';
    } 

	public static function getNavigationBadge(): ?string
	{
		$provider_id = Filament::auth('panel')->user()->id;
	   return static::getModel()::query()->where('provider_id', $provider_id)->count();
	   

	}
	public static function getEloquentQuery(): Builder {
		$provider_id = Filament::auth('panel')->user()->id;
		return parent::getEloquentQuery()->where('provider_id', $provider_id)->orderBy('created_at', 'desc');
	}	
   public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
				->collapsible()
                    ->schema([
                        Forms\Components\Select::make('services_id')
                            ->label('الخدمة')
                            ->relationship('service', 'name')
                            ->searchable()
                            ->options(Service::all()->where('is_avaliable', 1)->pluck('name', 'id'))
                            ->required()
                            ->createOptionForm([
                                Forms\Components\Section::make()
                                    ->schema([
                                        Forms\Components\Grid::make()
                                            ->schema([
                                                Forms\Components\Section::make('الصورة')
                                                    ->schema([
                                                        Forms\Components\FileUpload::make('image')
                                                            ->label('صورة الخدمة')
                                                            ->image()
                                                            ->disableLabel(),
                                                    ])
                                                    ->collapsible(),
                                                Forms\Components\Select::make('services_type_id')
                                                    ->label('نوع الخدمة')
                                                    ->relationship('type', 'name')
                                                    ->searchable()
                                                    ->options(ServicesType::all()->pluck('name', 'id'))
                                                    ->required(),
                                                Forms\Components\Select::make('parent_id')
                                                    ->label('القسم الرئيسي')
                                                    ->relationship('parent', 'name', fn (Builder $query) => $query->where('parent_id', null))
                                                    ->searchable()
                                                    ->placeholder('-- لا يوجد قسم رئيسي --'),
                                                Forms\Components\TextInput::make('name')
                                                    ->label('الخدمة')
                                                    ->required()
                                                    ->maxValue(50),
                                                Forms\Components\TextInput::make('slug')
                                                    ->label('Slug')
                                                    ->required()
                                                    ->unique(Service::class, 'slug', ignoreRecord: true),
                                            ]),
                                        Forms\Components\MarkdownEditor::make('description')
                                            ->label('وصف الخدمة'),
                                    ])
                                    ->columnSpan(['lg' => fn (?Service $record) => $record === null ? 3 : 2]),
                            ])
                            ->createOptionAction(function (Forms\Components\Actions\Action $action) {
                                return $action
                                    ->modalHeading('إضافة خدمة جديدة')
                                    ->modalButton('إضافة خدمة جديدة')
                                    ->modalWidth('lg');
                            }),
                    ])->columns(1),
                Forms\Components\Section::make()
				->collapsible()
                    ->schema([
                        Forms\Components\TextInput::make('price')
                            ->label('السعر')
                            ->numeric()
                            ->required()
                            ->default(20)
                            ->prefix('ريال سعودي'),
                        Forms\Components\TextInput::make('duration_in_minutes')
                            ->label('المدة بالدقائق')
                            ->required()
                            ->numeric()->live(true)
                            ->default(15)
								->afterStateUpdated(function (string $operation, $state, Forms\Set $set, Forms\Get $get) {
									// Get all repeater items
									$sessions = $get('sessions');
									
									// Loop through each repeater item and update its end_time
									foreach ($sessions as &$session) {
										$startTime = $session['start_time'];
										$endTime = (new DateTime($startTime))->modify('+' . $state . ' minutes')->format('H:i');
										$session['end_time'] = $endTime;
									}

									// Update the repeater items with the new end_time values
									$set('sessions', $sessions);
								}),
                    ])->columns(2),
Forms\Components\Section::make()
    ->description('عرف مواعيدك ( بمجرد وضع وقت البداية يتم احتساب وقت النهاية طبقا لمدة الخدمة )')
    ->icon('heroicon-m-clock')
	->collapsible()
	->schema([
            Repeater::make('sessions')->label('مواعيد تقديم الخدمة')
                ->relationship()
                ->schema([
                    Select::make('day_of_week')
                        ->label('يوم الأسبوع')
                        ->options([
                            '1' => 'السبت',
                            '2' => 'الأحد',
                            '3' => 'الإثنين',
                            '4' => 'الثلاثاء',
                            '5' => 'الأربعاء',
                            '6' => 'الخميس',
                            '7' => 'الجمعة',
                        ])
                        ->required()->columns(6),
						TimePicker::make('start_time')
							->label('وقت البداية')
							->required()->seconds(false)
							->live(true)
							->afterStateUpdated(function (string $operation, $state, Forms\Set $set, Forms\Get $get) {
							$duration = $get('../../duration_in_minutes');
							$endTime = (new DateTime($state))->modify('+' . $duration . ' minutes')->format('H:i');
							$set('end_time', $endTime);
						})->columns(3),
					
						TextInput::make('end_time')
							->label('وقت النهاية')
							->readOnly()->live(true),
                ])
                ->mutateRelationshipDataBeforeFillUsing(function (array $data): array {
                    $data['end_time'] = (new DateTime($data['start_time']))->modify('+' . $data['duration_in_minutes'] . ' minutes')->format('H:i');
                    return $data;
                })->columns(3),			
				
])->columns(1),
Forms\Components\Section::make()
    ->description('اختر المناطق التي توفر بها الخدمة')
    ->icon('heroicon-m-map-pin')
	->collapsible()
	->schema([
				Repeater::make('zones')
					->label('المناطق التي تتوفر الخدمة بها')
					->relationship()
					->schema([
						Select::make('zone_id')
							->label('المنطقة')
							->multiple()
							->relationship('zone', 'name') // هنا يجب تحديد العلاقة واسم الحقل الذي ترغب في عرضه
							->required()->searchable(),
					])
					->columns(1)
					
				
])->columns(1),
            ]);
    }

protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['provider_id'] = $provider_id = Filament::auth('panel')->user()->id;
    // معالجة الجلسات
    foreach ($data['sessions'] as $session) {
        ServicesSession::create([
            'services_id' => $this->id,
            'day_of_week' => $session['day_of_week'],
            'start_time' => $session['start_time'],
            'end_time' => $session['end_time'],
        ]);
    }

    // معالجة المناطق
    foreach ($data['zones'] as $zone) {
        ServicesZone::create([
            'services_id' => $this->id,
            'zone_id' => $zone['zone_id'],
        ]);
    }
    return $data;
}
public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('service.full_service_name')
                ->searchable(),
				
            Tables\Columns\TextColumn::make('price')->label('سعر الخدمة'),
            Tables\Columns\TextColumn::make('duration_in_minutes')
                ->label('المدة بالدقائق'),
        ])
        ->filters([
            // يمكنك إضافة الفلاتر هنا إذا كنت بحاجة إليها
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ])
        ->emptyStateActions([
            Tables\Actions\CreateAction::make(),
        ]);
}


   
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServicesProviders::route('/'),
            'create' => Pages\CreateServicesProvider::route('/create'),
            'edit' => Pages\EditServicesProvider::route('/{record}/edit'),
        ];
    }    
}
