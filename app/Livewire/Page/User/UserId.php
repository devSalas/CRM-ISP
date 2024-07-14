<?php

namespace App\Livewire\Page\User;

use App\Models\User;
use Livewire\Component;

class UserId extends Component
{

    public $id;
    public $user;

    public function mount($id){
        try {
            $this->user = User::findOrFail($id);
        } catch (\Exception $e) {
            abort(404); // Redirige a una página de error 404 si el usuario no se encuentra
        }
    }

    public function render()
    {
        return view('livewire.page.user.user-id');
    }
}
