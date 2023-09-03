<?php

namespace App\Filament\Dashboard\Resources\AppointmentResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Appointment;
use Filament\Facades\Filament;

class StatsUserAppointment extends BaseWidget
{
protected function getStats(): array
{
	
	$userId = Filament::auth('dashboard')->user()->id;
	$waitingCount = Appointment::where('user_id', $userId)->where('status', 'في الانتظار')->count();
    $inProgressCount = Appointment::where('user_id', $userId)->where('status', 'قيد التنفيذ')->count();
    $cancelledCount = Appointment::where('user_id', $userId)->where('status', 'ملغاه')->count();
    $completedCount = Appointment::where('user_id', $userId)->where('status', 'مكتملة')->count();

    return [
        Stat::make('في الانتظار', $waitingCount)
            ->description('حجوزات قيد الموافقة')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),		
        Stat::make('قيد التنفيذ', $inProgressCount)
            ->description('حجوزات جاري تنفيذها')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('info'),
        Stat::make('ملغاه', $cancelledCount)
            ->description('حجوزات ملغاة')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('danger'),
        Stat::make('مكتملة', $completedCount)
            ->description('حجوزات تمت بنجاح')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),		
    ];
}

}
