<?php

namespace App\Filament\Panel\Resources\ServiceResource\Pages;

use App\Filament\Panel\Resources\ServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditService extends EditRecord
{
    protected static string $resource = ServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
        public function getTitle(): string
    {
        return "تعديل الخدمة";
    }	
	
}
