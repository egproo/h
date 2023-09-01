<?php

namespace App\Filament\Dashboard\Resources\TicketResource\Pages;

use App\Filament\Dashboard\Resources\TicketResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTicket extends ViewRecord
{
    protected static string $resource = TicketResource::class;
protected static string $view = 'filament.resources.tickets.pages.view-ticket';	
}
