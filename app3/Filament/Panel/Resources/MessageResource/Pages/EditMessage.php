<?php

namespace App\Filament\Panel\Resources\MessageResource\Pages;

use App\Filament\Panel\Resources\MessageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMessage extends EditRecord
{
    protected static string $resource = MessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
        public function getTitle(): string
    {
        return "تعديل رسالة";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }		
}
