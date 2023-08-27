<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

use App\Models\Page;
use App\Models\Service;

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
    return view('welcome');
});

Route::get('/page/{page:slug}', function (Page $page) {
	return view('livewire.page', ['page' => $page]);
});

Route::get('/service/{service:slug}', function (Service $service) {
	return view('livewire.service', ['service' => $service]);
});