<?php

namespace App\Livewire\Page\Privilege;

use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Privileges extends Component
{
    public $user;

    public function mount($id)
    {
        $this->user = User::find($id);
        
        if (!$this->user) {
            session()->flash('error', 'Usuario no encontrado.');
            return Redirect::route('users');
        }
    }


    public function render()
    {
        return view('livewire.page.privilege.privileges');
    }
}
