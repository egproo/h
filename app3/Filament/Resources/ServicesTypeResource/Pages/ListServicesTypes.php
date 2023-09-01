<?php

namespace App\Filament\Resources\ServicesTypeResource\Pages;

use App\Filament\Resources\ServicesTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicesTypes extends ListRecords
{
    protected static string $resource = ServicesTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
        public function getTitle(): string
    {
        return "فئات الخدمات";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }		
}
