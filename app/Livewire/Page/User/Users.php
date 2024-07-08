<?php

namespace App\Livewire\Page\User;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::get();
        
    }

    public function render()
    {
        return view('livewire.page.user.users');
    }
}
