<?php

namespace App\Filament\Resources\ProviderResource\Pages;

use App\Filament\Resources\ProviderResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProvider extends ViewRecord
{
    protected static string $resource = ProviderResource::class;
        public function getTitle(): string
    {
        return "موفر خدمة";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }		
}
