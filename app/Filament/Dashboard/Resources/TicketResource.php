<?php

namespace App\Filament\Dashboard\Resources;

use App\Filament\Dashboard\Resources\TicketResource\Pages;
use App\Filament\Dashboard\Resources\TicketResource\RelationManagers;
use App\Models\Ticket;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Hidden;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';
   protected static ?string $navigationGroup = 'طلباتي';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'تذاكر الدعم';
    protected static function getTitle() : string 
    {
        return 'تذاكر الدعم';
    }
public static function getNavigationBadge(): ?string
{
    return static::getModel()::query()->where('user_id', auth()->id())->where('client_type', "user")->count();
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

protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['user_id'] = auth()->id();
     $data['client_type'] = 'user';

    return $data;
}
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
                //
            ])
            ->actions([

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                ]),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
			RelationManagers\RepliesRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTickets::route('/'),
            'create' => Pages\CreateTicket::route('/create'),
			 'view' => Pages\ViewTicket::route('/{record}'),
        ];
    }    
}
