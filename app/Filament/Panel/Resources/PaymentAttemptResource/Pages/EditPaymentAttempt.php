<?php

namespace App\Filament\Panel\Resources\PaymentAttemptResource\Pages;

use App\Filament\Panel\Resources\PaymentAttemptResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaymentAttempt extends EditRecord
{
    protected static string $resource = PaymentAttemptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
        public function getTitle(): string
    {
        return "تحرير دفع";
    }
    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }		
}
