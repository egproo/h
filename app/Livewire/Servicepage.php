<?php

namespace App\Livewire;
use App\Models\Service;

use Livewire\Component;

class Servicepage extends Component
{
    public $service;
    public $searchTerm = '';
    public $providers = [];

    public function mount(Service $service)
    {
        $this->service = $service;
        $this->providers = $this->service->activeProviders;
    }

    public function updatedSearchTerm()
    {
        $this->providers = $this->service->activeProviders->filter(function($provider) {
            return stripos($provider->name, $this->searchTerm) !== false;
        });
    }

    public function render()
    {
        return view('livewire.service')->with([
            'service' =>  $this->service,
            'providers' =>  $this->providers,
        ]);
    }
}