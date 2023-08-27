<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;

class SubservicesList extends Component
{
    public $service;

    public function mount(Service $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.subservices-list');
    }
}
