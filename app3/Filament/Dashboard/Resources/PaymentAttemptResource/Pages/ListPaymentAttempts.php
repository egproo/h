<?php

namespace App\Filament\Dashboard\Resources\PaymentAttemptResource\Pages;

use App\Filament\Dashboard\Resources\PaymentAttemptResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPaymentAttempts extends ListRecords
{
    protected static string $resource = PaymentAttemptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
        public function getTitle(): string
    {
        return "مدفوعاتي";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }		
}
