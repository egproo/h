<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OTPController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\LogoutControllerx;


use Illuminate\Http\Request;

use App\Models\Page;
use App\Models\Service;
use App\Models\Appointment;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/booking', function () {
    return redirect('dashboard/appointments/booking');
})->name('booking');
Route::get('/page/{page:slug}', function (Page $page) {
	return view('livewire.page', ['page' => $page]);
});

Route::get('/service/{slug}', [ServiceController::class, 'show']);
Route::get('/services', [ServiceController::class, 'all']);

Route::prefix('dashboard')->group(function () {
    Route::get('/verify', [OTPController::class, 'showdashboardVerifyForm'])->name('dashboard.verify.form');
    Route::post('/verifyotp', [OTPController::class, 'dashboardverify'])->name('dashboard.verifyotp');
});
Route::prefix('panel')->group(function () {
    Route::get('/verify', [OTPController::class, 'showpanelVerifyForm'])->name('panel.verify.form');
    Route::post('/verifyotp', [OTPController::class, 'panelverify'])->name('panel.verifyotp');
});
Route::get('/logout', [LogoutControllerx::class, 'logout']);
