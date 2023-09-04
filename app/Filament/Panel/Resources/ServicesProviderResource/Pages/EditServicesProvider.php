<?php

namespace App\Filament\Panel\Resources\ServicesProviderResource\Pages;

use App\Filament\Panel\Resources\ServicesProviderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicesProvider extends EditRecord
{
    protected static string $resource = ServicesProviderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label('الغاء تقديم الخدمة'),
        ];
    }
        public function getTitle(): string
    {
        return "تعديل الخدمة";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }	
}
