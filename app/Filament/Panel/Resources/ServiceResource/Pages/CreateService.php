<?php

namespace App\Filament\Panel\Resources\ServiceResource\Pages;

use App\Filament\Panel\Resources\ServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;
        public function getTitle(): string
    {
        return "إضافة خدمة";
    }
}
