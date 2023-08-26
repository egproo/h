<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdminResource\Pages;
use App\Filament\Resources\AdminResource\RelationManagers;
use App\Models\Admin;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Notifications\Notification;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminResource extends Resource
{
    protected static ?string $model = Admin::class;

    protected static ?string $slug = 'superadmins';
    protected static ?string $navigationGroup = 'إدارة المستخدمين';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?int $navigationSort = 100;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'المديرين';
    protected static function getTitle() : string 
    {
        return 'المديرين';
    } 
	public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}
public static function shouldRegisterNavigation(): bool
{
	  $userId = auth()->id();

    return $userId ==1?true:false;
}
public function mount(): void
{
		  $userId = auth()->id();

    abort_unless($userId ==1?true:false, 403);
}	 
public static function form(Form $form): Form
    {
       return $form
            ->schema([
                /*
                Forms\Components\Section::make()
                    ->schema([                
                                Forms\Components\FileUpload::make('avatar')->label('صورة الملف الشخصي'),
                ]),
                */
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')->label('الإسم')
                            ->maxValue(50)
                            ->required(),

                        Forms\Components\TextInput::make('phone')->tel()->label('رقم الجوال')
                            ->maxValue(50)->required()
                            ->telRegex('/^(?:\+966|0)(?:\d{9})$/')
                            ->rules('required', 'regex:/^(?:\+966|0)(?:\d{9})$/', 'unique:admins,phone','أدخل جوال صحيح'),
                                                  
                                        Forms\Components\TextInput::make('password')->disableAutocomplete()
                                        ->password()
                                        ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                                        ->dehydrated(fn ($state) => filled($state))
                                        ->required(fn (string $context): bool => $context === 'create')
                                        ->maxLength(255),
                ])->columns(3),        
                Forms\Components\Section::make()
                    ->schema([
       Forms\Components\Select::make('roles')->multiple()->relationship('roles', 'name')
                    ])->columns(3),       
          ]);    
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name') ->label('الإسم')
                    ->searchable(isIndividual: false,isGlobal:true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('رقم الجوال')
                    ->searchable(isIndividual: false, isGlobal: true)
                    ->sortable(),

            ])
            ->filters([
                //Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->groupedBulkActions([
                Tables\Actions\DeleteBulkAction::make('delete')
                ->action(function (Collection $records) {
                    $records->each->delete();
                    Notification::make()
                            ->title('تم الحذف بنجاح')
                            ->success()
                            ->send();
                })
                ->requiresConfirmation()


    
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
        public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'phone'];
    }
  
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAdmins::route('/'),
            'create' => Pages\CreateAdmin::route('/create'),
            'edit' => Pages\EditAdmin::route('/{record}/edit'),
        ];
    }    
}
