<?php

namespace App\Filament\Dashboard\Resources;

use App\Filament\Dashboard\Resources\PaymentAttemptResource\Pages;
use App\Models\PaymentAttempt;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentAttemptResource extends Resource
{
    protected static ?string $model = PaymentAttempt::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
   protected static ?string $navigationGroup = 'طلباتي';

    protected static ?string $recordTitleAttribute = 'content';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'مدفوعاتي';
    protected static function getTitle() : string 
    {
        return 'مدفوعاتي';
    }
public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}	
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('appointment_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('total')
                    ->required()
                    ->numeric(),
                Forms\Components\Toggle::make('is_successful')
                    ->required(),
                Forms\Components\Textarea::make('notes')
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('appointment_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_successful')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

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
            'index' => Pages\ListPaymentAttempts::route('/'),
        ];
    }    
}
