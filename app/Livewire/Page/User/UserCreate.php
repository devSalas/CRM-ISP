<?php

namespace App\Livewire\Page\User;

use App\Livewire\Forms\user\UserCreateForm;
use App\Models\Client;
use App\Models\User;
use App\Models\Worker;
use Livewire\Attributes\Layout;
use Livewire\Component;

class UserCreate extends Component
{

    public UserCreateForm $UserCreate;
    public $user;


    public function save()
    {
        $this->UserCreate->validate();

        $this->user = User::create(
            $this->UserCreate->only(['name', 'password', 'email', 'phone', 'gender', 'age', 'DNI', 'CE'])
        );

        $this->UserCreate->reset();
        
        $this->redirect("/users");
    }

    public function render()
    {
        return view('livewire.page.user.user-create');
    }
}
