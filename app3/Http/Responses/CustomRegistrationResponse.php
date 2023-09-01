<?php
namespace App\Http\Responses;

use Filament\Http\Responses\Auth\Contracts\RegistrationResponse as Responsable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CustomRegistrationResponse implements Responsable
{
    public function toResponse($request): RedirectResponse
    {
        return new RedirectResponse('/dashboard/verify');
    }
}
