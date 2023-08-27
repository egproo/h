<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Livewire\ServiceSearch;
use Illuminate\Http\Request;

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

Route::get('/service/{service:slug}', function (Service $service, Request $request) {
$searchTerm = request()->input('searchTerm', ''); // القيمة الافتراضية هي فارغة إذا لم يتم تحديدها
$city = request()->input('city', '');
$order = request()->input('order', '');

$service['searchTerm'] = $searchTerm;
$service['city'] = $city;
$service['order'] = $order;

    return view('livewire.service', ['service' => $service]);
});

Route::get('service/{slug}', \App\Livewire\Servicepage::class);
