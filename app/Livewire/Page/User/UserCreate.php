<?php

namespace App\Livewire\Page\User;

use App\Livewire\Forms\user\UserCreateForm;
use App\Models\Client;
use App\Models\User;
use App\Models\Worker;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserCreate extends Component
{

    public UserCreateForm $UserCreate;
    public $user;
    public $roles;

    public function save()
    {
        
         $this->UserCreate->validate();
        
        $this->user = User::create(
            $this->UserCreate->only(['name', 'password', 'email', 'phone', 'gender', 'age', 'DNI', 'CE'])
            );
            
        $this->addRoles($this->user, $this->UserCreate->roles);

        $this->UserCreate->reset();
        
        $this->redirect("/users");
    }


    public function addRoles($user, $roles)
    {

        $validRoles = Role::whereIn('id', $roles)->pluck('name')->toArray();
        if (!empty($validRoles)) {
            $user->syncRoles($validRoles);
        } else {

            session()->flash('error', 'No se encontraron roles válidos para asignar.');
        }
    }


    public function mount()
    {
        $this->roles = Role::get();
    }

    public function render()
    {
        return view('livewire.page.user.user-create');
    }
}
