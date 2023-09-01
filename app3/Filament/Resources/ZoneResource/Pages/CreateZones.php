<?php

namespace App\Filament\Resources\ZoneResource\Pages;

use App\Filament\Resources\ZoneResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateZones extends CreateRecord
{
    protected static string $resource = ZoneResource::class;
        public function getTitle(): string
    {
        return "اضافة منطقة";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }		
}
