<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ChatPage extends Component
{
    public Collection $users;

    public function mount()
    {
        $this->users = User::get();
    }

    public function render()
    {
        return view('livewire.chat-page');
    }
}
