<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Bastiao extends Component
{
    public ?int $count = 0;

    public function render()
    {
        return view('livewire.bastiao');
    }

    #[On('echo:bastiao,TestingReverbEvent')]
    public function add()
    {
        $this->count++;
    }
}
