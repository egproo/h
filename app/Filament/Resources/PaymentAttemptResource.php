<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentAttemptResource\Pages;
use App\Filament\Resources\PaymentAttemptResource\RelationManagers;
use App\Models\PaymentAttempt;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Select;
use Filament\Infolists\Components;
use Filament\Infolists\Infolist;
use Filament\Facades\Filament;
class PaymentAttemptResource extends Resource
{
    protected static ?string $model = PaymentAttempt::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
   protected static ?string $navigationGroup = 'إدارة الطلبات';

    protected static ?string $recordTitleAttribute = 'content';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'الإيرادات';
    protected static function getTitle() : string 
    {
        return 'الإيرادات';
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
                    ->sortable()->label('رقم الحجز'),
                 Tables\Columns\TextColumn::make('appointment.service.full_service_name')
                    ->label('إسم الخدمة'),
                 Tables\Columns\TextColumn::make('appointment.provider.full_provider_name')
                    ->label('موفر الخدمة'),
                 Tables\Columns\TextColumn::make('total')
                     ->money('sar')
                    ->sortable()
                    ->label('المبلغ'),
                     Tables\Columns\IconColumn::make('is_successful')->label('حالة الدفع')
                    ->boolean(),
                 Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d-m-Y')
                    ->sortable()
                    ->label('تاريخ الدفع'),
            ])
            ->filters([
                SelectFilter::make('is_successful')
                    ->label('حالة الدفع')
                    ->options([
                        '1' => 'تم الدفع',
                        '0' => 'لم يتم الدفع',
                    ]),
                Filter::make('created_at')
                    ->label('تاريخ الدفع')
                    ->form([
                        DatePicker::make('date')
                            ->label('تاريخ الدفع')
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['date'] ?? null,
                            fn (Builder $query, $date): Builder => $query->whereDate('created_at', $date)
                        );
                    }),
            ])
            ->actions([
               // Tables\Actions\EditAction::make(),
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
