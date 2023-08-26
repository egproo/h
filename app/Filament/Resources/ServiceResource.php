<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use App\Models\ServicesType;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;
class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

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
    return static::getModel()::count();
}	
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
Forms\Components\Select::make('services_type_id')->label('نوع الخدمة')
    ->relationship('type', 'name')
    ->searchable()->options(ServicesType::all()->pluck('name','id'))
    ->required()
    ->createOptionForm([
FileUpload::make('image')->label('صورة الفئة')
    ->image()->columnSpanFull(),	
		Forms\Components\TextInput::make('name')->required()->label('نوع الخدمة'),
		Forms\Components\TextInput::make('slug')->required()->label('Slug'),
    ])
    ->createOptionAction(function (Forms\Components\Actions\Action $action) {
        return $action
            ->modalHeading('إضافة نوع جديد')
            ->modalButton('إضافة نوع جديد')
            ->modalWidth('lg');
    }),
								Forms\Components\Select::make('parent_id')
											->label('القسم الرئيسي')
											->relationship('parent', 'name', fn (Builder $query) => $query->where('parent_id', null))
											->searchable()
											->placeholder('-- لا يوجد قسم رئيسي --'),                                
                                Forms\Components\TextInput::make('name')->label('الخدمة')
                                    ->required()
                                    ->maxValue(50)
									
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                                Forms\Components\TextInput::make('slug')
                                   // ->disabled()
                                    ->dehydrated()
                                    ->required()
                                    ->unique(Service::class, 'slug', ignoreRecord: true),
                            ]),



                        Forms\Components\Toggle::make('is_visible')
                            ->label('حالة الخدمة')
                            ->default(true),

                        Forms\Components\MarkdownEditor::make('description')
                            ->label('وصف الخدمة'),
                    ])
                    ->columnSpan(['lg' => fn (?Service $record) => $record === null ? 3 : 2]),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Placeholder::make('created_at')
                            ->label('مضافة في')
                            ->content(fn (Service $record): ?string => $record->created_at?->diffForHumans()),

                        Forms\Components\Placeholder::make('updated_at')
                            ->label('آخر تحديث')
                            ->content(fn (Service $record): ?string => $record->updated_at?->diffForHumans()),
                    ])
                    ->columnSpan(['lg' => 1])
                    ->hidden(fn (?Service $record) => $record === null),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('الصورة'),
				Tables\Columns\TextColumn::make('type.name')->label('نوع الخدمة')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('parent.name')
                    ->label('القسم الرئيسي')
                    ->searchable()
					->default('-- لا يوجد --')
                    ->sortable(),                
                Tables\Columns\TextColumn::make('name')
                    ->label('الخدمة')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\IconColumn::make('is_visible')
                    ->label('الحالة')
                    ->boolean()
                    ->sortable(),     
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
				Tables\Actions\DeleteAction::make(),
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
        //RelationManagers\TypeRelationManager::class,
        //RelationManagers\ProvidersRelationManager::class,
		
    ];
}	
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }    
}
