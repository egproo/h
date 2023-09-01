<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicesTypeResource\Pages;
use App\Filament\Resources\ServicesTypeResource\RelationManagers;
use App\Models\ServicesType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;

class ServicesTypeResource extends Resource
{
    protected static ?string $model = ServicesType::class;

    protected static ?string $navigationIcon = 'heroicon-m-clipboard-document-check';
    protected static ?string $navigationLabel = 'فئات الخدمات';
    protected static ?string $navigationGroup = 'إدارة الخدمات';
    protected static ?int $navigationSort = 6;

    protected static function getTitle() : string 
    {
        return 'فئات الخدمات';
    }
public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}	
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
FileUpload::make('image')->label('صورة الفئة')
    ->image()->columnSpanFull(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
			ImageColumn::make('image')->circular()->label('صورة الفئة'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(isIndividual: false,isGlobal:true),

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
            'index' => Pages\ListServicesTypes::route('/'),
            'create' => Pages\CreateServicesType::route('/create'),
            'edit' => Pages\EditServicesType::route('/{record}/edit'),
        ];
    }    
}
