<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page as PageModel;

class Page extends Component
{
    public $page;

    public function mount($slug): void
    {
        $this->page = PageModel::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.page');
    }
}
