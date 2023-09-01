<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ZoneResource\Pages;
use App\Filament\Resources\ZoneResource\RelationManagers;
use App\Models\Zone;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ZoneResource extends Resource
{
    protected static ?string $model = Zone::class;
    protected static ?int $navigationSort = 150;
    protected static ?string $navigationGroup = 'إدارة النظام';

    protected static ?string $navigationIcon = 'heroicon-m-map-pin';
    protected static ?string $navigationLabel = 'المناطق';
    protected static function getTitle() : string 
    {
        return 'المناطق';
    } 
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                       Forms\Components\TextInput::make('name') ->required()->unique(Zone::class, 'name', ignoreRecord: true)
                            ->label('المنطقة'),
            ]);
    }
public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name') ->label('المنطقة')
                    ->searchable(isIndividual: false,isGlobal:true)
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
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListZones::route('/'),
            'create' => Pages\CreateZones::route('/create'),
            'edit' => Pages\EditZones::route('/{record}/edit'),
        ];
    }    
}
