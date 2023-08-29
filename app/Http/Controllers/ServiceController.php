<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
		return view('livewire.service',['slug'=>$slug, 'service' => $service]);
		
    }
    public function all()
    {
		return view('livewire.services');
		
    }	
}
//