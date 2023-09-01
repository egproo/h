<?php

namespace App\Filament\Dashboard\Resources\AppointmentResource\Pages;

use App\Filament\Dashboard\Resources\AppointmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAppointments extends ListRecords
{
    protected static string $resource = AppointmentResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
        public function getTitle(): string
    {
        return "حجوزاتي";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
    protected function getHeaderWidgets(): array
    {
        return [
			 AppointmentResource\Widgets\StatsUserAppointment::class,
        ];
    }	
}
