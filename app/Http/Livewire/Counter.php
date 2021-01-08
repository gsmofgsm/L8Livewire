<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count;

    public function mount()
    {
        $this->count = auth()->user()->count ?? 0;
    }

    public function increment()
    {
        $this->count++;
        $this->saveCount();
    }

    public function decrement()
    {
        $this->count--;
        $this->saveCount();
    }

    public function render()
    {
        return view('livewire.counter');
    }

    protected function saveCount()
    {
        if (auth()->user()) {
            auth()->user()->count = $this->count;
            auth()->user()->save();
        }
    }
}
