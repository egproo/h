<?php

namespace App\Livewire;
use App\Models\Service;

use Livewire\Component;

class Servicepage extends Component
{
  public $service = [];
  public $searchTerm = '';
    public $city = '';
    public $order = '';
    public $providers = [];
    public $activezones = [];
    public $slug = '';

    public function mount($slug)
    {
        $this->service =  Service::where('slug', $slug)->firstOrFail();
         $this->loadProviders();
		$this->slug = $slug;

		 // تحميل المناطق المفعلة
    }

    public function updatedSearchTerm()
    {
        $this->loadProviders();
    }

    public function updatedCity()
    {
       $this->loadProviders();
    }

    public function updatedOrder()
    {
        $this->loadProviders();
		
    }

    public function loadProviders()
    {
			$query = $this->service->activeProviders();

        if ($this->searchTerm) {
            $query->where('name', 'like', '%' . $this->searchTerm . '%');
        }

        if (!$this->order) {
            $this->order = 'asc';
        }		
        $this->providers = $query->orderBy('price', $this->order)->get();
        $this->dispatch('refreshservicepage'); 
    }

    public function render()
    {
    return view('livewire.servicepage', [
        'service' =>  $this->service,
        'providers' =>  $this->providers,
        'slug' =>  $this->slug,
    ]);
    }
}
