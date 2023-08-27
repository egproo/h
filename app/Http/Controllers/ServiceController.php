<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        if ($service->childServices->count() > 0) {
            return view('services.subservices', compact('service'));
        } else {
            return view('services.providers', compact('service'));
        }
    }
}
//