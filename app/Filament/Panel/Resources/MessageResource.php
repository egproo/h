<?php

namespace App\Filament\Panel\Resources;

use App\Models\Message;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Facades\Filament;
use App\Filament\Panel\Resources\MessageResource\Pages;
use Filament\Forms\Form;
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

    protected static function getTitle(): string
    {
        return 'الرسائل';
    }

public static function getNavigationBadge(): ?string
{
    $providerId = Filament::auth('panel')->user()->id;

    // جلب معرفات المواعيد التي تخص المزود الحالي
    $appointmentIds = Appointment::where('provider_id', $providerId)->pluck('id')->toArray();

    return static::getModel()::query()
        ->whereIn('appointment_id', $appointmentIds)
        ->where('user_id', '!=', 0)
        ->count();
}


    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('content')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Grid::make(8)
                ->schema([
                    TextColumn::make('content')
                        ->label('الرسالة')->columnSpan([
            'lg' => 6,
            'md' => 6,			
            '2xl' => 6,
        ]),
                    TextColumn::make('user.name')
                        ->label('اسم العميل')->columnSpan([
            'lg' => 1,
            'md' => 1,			
            '2xl' => 1,
        ]),		

                    TextColumn::make('created_at')
                        ->label('تاريخ الإرسال')
                        ->dateTime('Y-m-d H:i')->columnSpan([
            'lg' => 1,
            'md' => 1,			
            '2xl' => 1,
        ]),
                ])
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
            Filter::make('user_id')
                ->label('العميل')
                ->form([
					Select::make('user')
						->label('اختر  العميل')
						->options(function () {
							$userId = auth()->id();
							return \App\Models\Message::where('provider_id', $userId)
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
                        fn (Builder $query, $providerId): Builder => $query->where('provider_id', $providerId)
                    );
                }),					
			])
            ->actions([])
            ->bulkActions([])
            ->emptyStateActions([]);
}
    
    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMessages::route('/'),
        ];
    }

    // فقط عرض الرسائل التي تخص مواعيد العميل
public static function getEloquentQuery(): Builder
{
    $providerId = Filament::auth('panel')->user()->id;

    // جلب معرفات المواعيد التي تخص المزود الحالي
    $appointmentIds = Appointment::where('provider_id', $providerId)->pluck('id')->toArray();

    return parent::getEloquentQuery()
        ->whereIn('appointment_id', $appointmentIds)
        ->where('user_id', '!=', 0)
        ->orderBy('created_at', 'asc');
}






}
