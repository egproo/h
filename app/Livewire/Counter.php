<?php
 
namespace App\Livewire;
 
use Livewire\Component;
 
class Counter extends Component
{
    public $count = 1;
 
public function increment()
{
    \Log::info('Increment method called');
    $this->count++;
}

public function decrement()
{
    \Log::info('Decrement method called');
    $this->count--;
}
 
    public function render()
    {
        return view('livewire.counter');
    }
}