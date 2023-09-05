<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TicketResource\Pages;
use App\Models\Ticket;
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
class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';
   protected static ?string $navigationGroup = 'إدارة الطلبات';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'تذاكر الدعم';
    protected static function getTitle() : string 
    {
        return 'تذاكر الدعم';
    }
public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->label('عنوان التذكرة')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')->label('الرسالة')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('client.name')->label('العميل')
                    ->searchable()->sortable(),			
                Tables\Columns\TextColumn::make('title')->label('عنوان التذكرة')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')->label('الرسالة')
                    ->searchable(),
                Tables\Columns\BadgeColumn::make('status')->label('الحالة')
                    ->getStateUsing(fn (Ticket $record): string => $record->status = "open" ? 'مفتوحة' : 'مسودة')
                    ->colors([
                        'success' => 'مفتوحة',
                    ]),					
                Tables\Columns\TextColumn::make('created_at')->label('تاريخ الإضافة')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')->label('تاريخ التحديث')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Filter::make('created_at')
                    ->label('تاريخ الإضافة')
                    ->form([
                        DatePicker::make('date')
                            ->label('تاريخ الإضافة')
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['date'] ?? null,
                            fn (Builder $query, $date): Builder => $query->whereDate('created_at', $date)
                        );
                    }),
            ])
            ->actions([
            ])
            ->bulkActions([
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTickets::route('/'),
            'view' => Pages\ViewTicket::route('/{record}'),
        ];
    }    
}
