<?php

namespace App\Filament\Dashboard\Resources;

use App\Filament\Dashboard\Resources\AppointmentResource\Pages;
use App\Models\Appointment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AppointmentResource extends Resource
{
    protected static ?string $model = Appointment::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';
   protected static ?string $navigationGroup = 'طلباتي';

    protected static ?string $recordTitleAttribute = 'content';

    protected static ?int $navigationSort = 1;
public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}
    protected static ?string $navigationLabel = 'حجوزاتي';
    protected static function getTitle() : string 
    {
        return 'حجوزاتي';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('service_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('services_session_id')
                    ->required()
                    ->numeric(),
                Forms\Components\DateTimePicker::make('appointment_date')
                    ->required(),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('service_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('services_session_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('appointment_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
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
            'index' => Pages\ListAppointments::route('/'),
	        'booking' => Pages\Booking::route('/booking'),

        ];
    }    
}
