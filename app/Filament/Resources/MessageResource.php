<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MessageResource\Pages;
use App\Filament\Resources\MessageResource\RelationManagers;
use App\Models\Message;
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
use App\Models\Appointment;
class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
   protected static ?string $navigationGroup = 'إدارة الطلبات';

    protected static ?string $recordTitleAttribute = 'content';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'الرسائل';
    protected static function getTitle() : string 
    {
        return 'الرسائل';
    } 
public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}	
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
                    TextColumn::make('appointment_id')
                        ->label('رقم الحجز')
                        ->columnSpan(1),
                    TextColumn::make('content')
                        ->label('الرسالة')
                        ->columnSpan(6),
					TextColumn::make('writer')->label('كاتب الرسالة')
						->getStateUsing(fn (Message $record): string => 
							($record->provider_id > 0) ? $record->provider->name.' ( موفر الخدمة )' : 
							(($record->user_id > 0) ? $record->user->name.' ( العميل  )' : 'إدارة حريص')
						)->columnSpan(1),
                    TextColumn::make('created_at')
                        ->label('تاريخ الإرسال')
                        ->dateTime('Y-m-d H:i')
                        ->columnSpan(1),
              
        ])
            ->filters([
				Filter::make('created_at')
					->label('تاريخ الإرسال')
					->form([
						DatePicker::make('date')
							->label('تاريخ الإرسال')
					])
					->query(function (Builder $query, array $data): Builder {
						return $query->when(
							$data['date'] ?? null,
							fn (Builder $query, $date): Builder => $query->whereDate('created_at', $date)
						);
					})
					->indicateUsing(function (array $data): array {
						$indicators = [];
						if ($data['date'] ?? null) {
							$indicators['date'] = 'تاريخ الإرسال: ' . $data['date'];
						}

						return $indicators;
					}),	
            Filter::make('provider_id')
                ->label('موفر الخدمة')
                ->form([
					Select::make('provider')
						->label('اختر موفر الخدمة')
						->options(function () {
							
							return \App\Models\Message::where('id', '>', '0')
								->with('provider')
								->get()
								->filter(function ($message) {
									return !is_null($message->provider) && !is_null($message->provider->name);
								})
								->pluck('provider.name', 'provider.id')
								->unique()
								->toArray();
						})

                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query->when(
                        $data['provider'] ?? null,
                        fn (Builder $query, $providerId): Builder => $query->where('provider_id', $providerId)
                    );
                }),	
            Filter::make('user_id')
                ->label('العميل')
                ->form([
					Select::make('user')
						->label('اختر  العميل')
						->options(function () {
							
							return \App\Models\Message::where('id', '>', '0')
								->with('user')
								->get()
								->filter(function ($message) {
									return !is_null($message->user) && !is_null($message->user->name);
								})
								->pluck('user.name', 'user.id')
								->unique()
								->toArray();
						})

                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query->when(
                        $data['user'] ?? null,
                        fn (Builder $query, $userId): Builder => $query->where('user_id', $userId)
                    );
                }),					
			])
        ->actions([
           // Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([

        ])
        ->emptyStateActions([
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
            'index' => Pages\ListMessages::route('/'),
        ];
    }    
}
