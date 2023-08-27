<?php

namespace App\Livewire;
use App\Models\Service;

use Livewire\Component;

class Servicepage extends Component
{
  public Service $service;
  public $searchTerm = '';
    public $city = '';
    public $order = 'asc';
    public $providers = [];
    public $activezones = [];
    public $slug = '';

    public function mount($slug)
    {
        $this->service =  Service::where('slug', $slug)->firstOrFail();
         $this->loadProviders();$this->loadZones();
		$this->slug = $slug;

		 // تحميل المناطق المفعلة
    }

    public function updatedSearchTerm()
    {
        $this->loadProviders();$this->loadZones();
    }

    public function updatedCity()
    {
         $this->loadProviders();$this->loadZones();
    }

    public function updatedOrder()
    {
        $this->loadProviders();$this->loadZones();
		
    }

    public function loadProviders()
    {
        $query = $this->service->activeProviders();

        if ($this->searchTerm) {
            $query->where('name', 'like', '%' . $this->searchTerm . '%');
        }

        if ($this->city) {
            $query->whereHas('zones', function ($q) {
                $q->where('id', $this->city);
            });
        }

        $this->providers = $query->orderBy('price', $this->order)->get();
    }
    public function loadZones()
    {
        $query = $this->service->services_zones();

        $this->activezones = $query->orderBy('id', 'asc')->get();
    }	
	

    public function render()
    {

    return view('livewire.servicepage', [
        'service' =>  $this->service,
        'providers' =>  $this->providers,
        'activezones' =>  $this->activezones,
        'slug' =>  $this->slug,
    ]);
    }
}
