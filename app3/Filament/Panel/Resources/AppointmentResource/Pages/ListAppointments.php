<?php

namespace App\Filament\Panel\Resources\AppointmentResource\Pages;

use App\Filament\Panel\Resources\AppointmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAppointments extends ListRecords
{
    protected static string $resource = AppointmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
          //  Actions\CreateAction::make(),
        ];
    }
        public function getTitle(): string
    {
        return "الحجوزات";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }		
}
