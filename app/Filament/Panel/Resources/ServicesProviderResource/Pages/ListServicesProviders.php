<?php

namespace App\Filament\Panel\Resources\ServicesProviderResource\Pages;

use App\Filament\Panel\Resources\ServicesProviderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicesProviders extends ListRecords
{
    protected static string $resource = ServicesProviderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('توفير خدمة جديدة'),
        ];
    }
        public function getTitle(): string
    {
        return "خدماتي";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }	
}
