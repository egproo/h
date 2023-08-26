<?php

namespace App\Filament\Dashboard\Resources\MessageResource\Pages;

use App\Filament\Dashboard\Resources\MessageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMessage extends CreateRecord
{
    protected static string $resource = MessageResource::class;
        public function getTitle(): string
    {
        return "رسالة جديدة";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }		
}
