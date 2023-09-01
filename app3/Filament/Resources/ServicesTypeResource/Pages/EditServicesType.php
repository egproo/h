<?php

namespace App\Filament\Resources\ServicesTypeResource\Pages;

use App\Filament\Resources\ServicesTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicesType extends EditRecord
{
    protected static string $resource = ServicesTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
        public function getTitle(): string
    {
        return "تعديل نوع الخدمة";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }		
}
