<?php

namespace App\Livewire\Page\User;

use App\Livewire\Forms\user\UserCreateForm;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class UserCreate extends Component
{

    public UserCreateForm $UserCreate;
    
    public function save()
    {
        $this->UserCreate->validate();
          $user = User::create(
            $this->UserCreate->only(['name','password','email','phone','gender','age','address','DNI','CE','zone','district'])
        );
        $this->UserCreate->reset();
        $this->redirect("/users");
    }
    public function render()
    {
        return view('livewire.page.user.user-create');
    }
}
