<?php

namespace App\Livewire\Page\User;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $id;
    public $users;
    public $message;
    public $showModalDelete = false;


    public function openModalDelete($id)
    {

        $this->id = $id;
    }
    
    public function delete()
    {
        if ($this->id) {
            User::find($this->id)->delete();
            $this->showModalDelete = false;
            $this->users= User::get();
        } else {
            $this->message = "Ocurrio un Error";
        }
    }



    public function mount()
    {
        
        $this->users = User::get();
    }

    public function render()
    {
        return view('livewire.page.user.users');
    }
}
