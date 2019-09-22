<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Emoji extends Component
{
    public $currentMood = '&#128529;';
    protected $listeners = ['getRandomMood' => 'getRandomMood'];

    public function render()
    {
        return view('livewire.emoji');
    }

    public function getRandomMood(): void
    {
        $emojis = [
            '128512',
            '128513',
            '128520',
            '128524',
            '128528',
            '128530',
            '128544',
            '128543'
        ];

        $this->currentMood = sprintf('&#%s;', array_random($emojis));
    }
}
