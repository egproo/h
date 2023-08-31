<?php
namespace App\Http\Controllers;

use Filament\Facades\Filament;
use App\Http\Responses\LogoutxResponse;

class LogoutControllerx extends Controller
{
    public function logout(): LogoutxResponse
    {
        Filament::auth('admincp')->logout();
		Filament::auth('panel')->logout();
		Filament::auth('dashboard')->logout();
		Filament::auth()->logout();		
        session()->invalidate();
        session()->regenerateToken();

        return app(LogoutxResponse::class);
    }
}