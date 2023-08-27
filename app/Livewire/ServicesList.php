<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;

class ServicesList extends Component
{
    public $services;

    public function mount()
    {
        $this->services = Service::whereNull('parent_id')->get();
    }

    public function render()
    {
        return view('livewire.services-list');
    }
}
