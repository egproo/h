<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Page;

class Page extends Component
{
    public $page;

    public function mount($slug): void
    {
        $this->page = Page::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.page');
    }
}
