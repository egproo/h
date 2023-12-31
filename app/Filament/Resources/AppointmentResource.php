<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppointmentResource\Pages;
use App\Filament\Resources\AppointmentResource\RelationManagers;
use App\Models\Appointment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Facades\Filament;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Select;
use Filament\Infolists\Components;
use Filament\Infolists\Infolist;
class AppointmentResource extends Resource
{
    protected static ?string $model = Appointment::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';
   protected static ?string $navigationGroup = 'إدارة الطلبات';

    protected static ?string $recordTitleAttribute = 'content';

    protected static ?int $navigationSort = 1;
public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}
    protected static ?string $navigationLabel = 'الحجوزات';
    protected static function getTitle() : string 
    {
        return 'الحجوزات';
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
                    TextColumn::make('id')
                        ->label('رقم الحجز')
                        ->columnSpan(1),
						TextColumn::make('service.full_service_name')->label('إسم الخدمة'),
				TextColumn::make('provider.full_provider_name')->label('موفر الخدمة'),
				TextColumn::make('user.name')->label('العميل'),
				TextColumn::make('appointment_date')->label('تاريخ الحجز'),
				TextColumn::make('session.full_session_time')->label('ميعاد الحجز')->dateTime('g:i  A'),
				Tables\Columns\BadgeColumn::make('status')->label('الحالة')
					->getStateUsing(fn (Appointment $record): string => $record->status)
					->colors([
						'warning' => 'في الانتظار',
						'info' => 'قيد التنفيذ',
						'danger' => 'ملغاه',
						'success' => 'مكتملة',
					]),	
            ])
            ->filters([
				SelectFilter::make('status')->label('حالة الحجز')
					->options([
						'في الانتظار' => 'في الانتظار',
						'قيد التنفيذ' => 'قيد التنفيذ',
						'ملغاه' => 'ملغاه',
						'مكتملة' => 'مكتملة',
				]),
				Filter::make('appointment_date')
					->label('تاريخ الحجز')
					->form([
						DatePicker::make('date')
							->label('تاريخ الحجز')
					])
					->query(function (Builder $query, array $data): Builder {
						return $query->when(
							$data['date'] ?? null,
							fn (Builder $query, $date): Builder => $query->whereDate('appointment_date', $date)
						);
					})
					->indicateUsing(function (array $data): array {
						$indicators = [];
						if ($data['date'] ?? null) {
							$indicators['date'] = 'تاريخ الحجز: ' . $data['date'];
						}

						return $indicators;
					}),
					Filter::make('service_id')
						->label('الخدمة')
						->form([
							Select::make('service')->label('اختر الخدمة')
								->placeholder('اختر الخدمة')
								->options(function () {
									$userId = Filament::auth('admincp')->user()->id;
									return \App\Models\Service::whereHas('appointments', function ($query) use ($userId) {
										$query;
									})
									->get()
									->pluck('full_service_name', 'id')
									->toArray();
								})
						])
						->query(function (Builder $query, array $data): Builder {
							return $query->when(
								$data['service'] ?? null,
								fn (Builder $query, $serviceId): Builder => $query->where('service_id', $serviceId)
							);
						})
						->indicateUsing(function (array $data): array {
							$indicators = [];
							if ($data['service'] ?? null) {
								$serviceName = \App\Models\Service::find($data['service'])->full_service_name;
								$indicators['service'] = 'الخدمة: ' . $serviceName;
							}

							return $indicators;
						}),

				Filter::make('provider_id')
					->label('موفر الخدمة')
					->form([
						Select::make('provider')->label('موفر الخدمة')
							->placeholder('اختر موفر الخدمة')
							->options(function () {
								$userId = Filament::auth('admincp')->user()->id;
								$providerIds = \App\Models\Appointment::pluck('provider_id')->unique();
								return \App\Models\Provider::whereIn('id', $providerIds)->pluck('name', 'id')->toArray();
							})
					])
					->query(function (Builder $query, array $data): Builder {
						return $query->when(
							$data['provider'] ?? null,
							fn (Builder $query, $providerId): Builder => $query->where('provider_id', $providerId)
						);
					})
					->indicateUsing(function (array $data): array {
						$indicators = [];
						if ($data['provider'] ?? null) {
							$providerName = \App\Models\Provider::find($data['provider'])->name;
							$indicators['provider'] = 'موفر الخدمة: ' . $providerName;
						}

						return $indicators;
					}),
				Filter::make('user_id')
					->label('العميل')
					->form([
						Select::make('user')->label('العميل')
							->placeholder('اختر العميل')
							->options(function () {
								$userIds = \App\Models\Appointment::pluck('user_id')->unique();
								return \App\Models\User::whereIn('id', $userIds)->pluck('name', 'id')->toArray();
							})
					])
					->query(function (Builder $query, array $data): Builder {
						return $query->when(
							$data['user'] ?? null,
							fn (Builder $query, $userId): Builder => $query->where('user_id', $userId)
						);
					})
					->indicateUsing(function (array $data): array {
						$indicators = [];
						if ($data['user'] ?? null) {
							$userName = \App\Models\User::find($data['user'])->name;
							$indicators['user'] = 'العميل : ' . $userName;
						}

						return $indicators;
					}),			
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    //Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                //Tables\Actions\CreateAction::make(),
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
            'view' => Pages\ViewAppointment::route('/{record}'),
			
        ];
    }    
}
