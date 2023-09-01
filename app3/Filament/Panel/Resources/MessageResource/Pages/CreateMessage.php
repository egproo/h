<?php

namespace App\Filament\Panel\Resources\MessageResource\Pages;

use App\Filament\Panel\Resources\MessageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMessage extends CreateRecord
{
    protected static string $resource = MessageResource::class;
        public function getTitle(): string
    {
        return "اضافة رسالة";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }		
}
