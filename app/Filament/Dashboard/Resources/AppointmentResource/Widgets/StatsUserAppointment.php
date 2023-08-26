<?php

namespace App\Filament\Dashboard\Resources\AppointmentResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsUserAppointment extends BaseWidget
{
    protected function getStats(): array
    {
        return [
        Stat::make('في الانتظار', 1)
            ->description('حجوزات قيد الموافقة')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),		
        Stat::make('قيد التنفيذ', 1)
            ->description('حجوزات جاري تنفيذها')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('info'),
		Stat::make('ملغاه', 1)
            ->description('حجوزات ملغاة')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('danger'),
        Stat::make('مكتملة', 2)
            ->description('حجوزات تمت بنجاح')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),		
        ];
    }
}
