<?php

namespace App\Filament\Panel\Resources\ServicesProviderResource\Pages;

use App\Filament\Panel\Resources\ServicesProviderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateServicesProvider extends CreateRecord
{
    protected static string $resource = ServicesProviderResource::class;
        public function getTitle(): string
    {
        return "إضافة خدمة جديدة";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }	
}
