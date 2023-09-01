<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProviderResource\Pages;
use App\Filament\Resources\ProviderResource\RelationManagers;
use App\Models\Provider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\SelectColumn;
 

class ProviderResource extends Resource
{
    protected static ?string $model = Provider::class;
    protected static ?string $recordTitleAttribute = 'name';
    protected static ?int $navigationSort = 101;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'موفري الخدمات';
    protected static function getTitle() : string 
    {
        return 'موفري الخدمات';
    } 
public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}	
    protected static ?string $navigationGroup = 'إدارة المستخدمين';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

Tables\Columns\TextColumn::make('type')
    ->label('الفئة')
    ->state(fn ($record) => $record->type == 1 ? 'فرد' : 'مؤسسة'),

                Tables\Columns\TextColumn::make('title')->label('وصف مختصر')
                    ->searchable(isIndividual: false,isGlobal:true)
					->sortable(),	
                Tables\Columns\TextColumn::make('identification')->label('رقم الهوية')
                    ->searchable(isIndividual: false,isGlobal:true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')->label('الإسم')
                    ->searchable(isIndividual: false,isGlobal:true)
					->sortable(),
                Tables\Columns\TextColumn::make('phone')->label('الهاتف')
                    ->searchable(isIndividual: false,isGlobal:true)
					->sortable(),
                Tables\Columns\IconColumn::make('status')->label('الحالة')
                    ->boolean(),					

            ])
            ->filters([
				SelectFilter::make('status')->label('الحالة')
					->multiple()
					->options([
						'0' => 'غير نشط',
						'1' => 'فعال',
					]),
				/*SelectFilter::make('title')->label('الوسف المختصر')
					->relationship('details', 'title')
					->searchable()
					->preload(),*/
			])
            ->actions([
            ])
            ->bulkActions([

            ])
            ->emptyStateActions([
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
				RelationManagers\DocsRelationManager::class,
				RelationManagers\ServicesRelationManager::class,
				RelationManagers\SessionsRelationManager::class,
				RelationManagers\MessagesRelationManager::class,

        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProviders::route('/'),
            'view' => Pages\ViewProvider::route('/{record}'),
        ];
    }    
}
