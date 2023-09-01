<?php

namespace App\Filament\Resources\ServicesTypeResource\Pages;

use App\Filament\Resources\ServicesTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateServicesType extends CreateRecord
{
    protected static string $resource = ServicesTypeResource::class;
        public function getTitle(): string
    {
        return "إضافة نوع الخدمات";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }		
}
