<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $name = 'nikita';

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function updated()
    {
        if ($this->count > 2){
            $this->name = "&#128529;";
        }
        if ($this->count < -2){
            $this->name = "&#128542;";
        }
    }

}
