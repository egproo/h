<?php

namespace App\Filament\Dashboard\Resources\TicketResource\Pages;

use App\Filament\Dashboard\Resources\TicketResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTicket extends CreateRecord
{
    protected static string $resource = TicketResource::class;
        public function getTitle(): string
    {
        return "تذكرة جديدة";
    }

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }	
protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['user_id'] = auth()->id();
     $data['client_type'] = 'user';

    return $data;
}	
}
