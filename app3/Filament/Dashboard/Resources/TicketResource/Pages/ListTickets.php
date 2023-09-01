<?php

namespace App\Filament\Dashboard\Resources\TicketResource\Pages;

use App\Filament\Dashboard\Resources\TicketResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTickets extends ListRecords
{
    protected static string $resource = TicketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
        public function getTitle(): string
    {
        return "تذاكر الدعم";
    }

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
}
