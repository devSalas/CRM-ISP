<?php

namespace App\Livewire\Page\Privilege;

use App\Livewire\Forms\privileges\PrivilegeEditForm;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Privileges extends Component
{
    public $user;
    public $id;
    public PrivilegeEditForm $PrivilegeEdit;

    public $roles;

    public function mount($id)
    {
        $this->roles = Role::get();
        $this->user = User::find($id);

        $userRoles = $this->user->roles->pluck('id')->toArray();  // Para obtener los IDs de los roles

        $this->PrivilegeEdit->roles = $userRoles;

        if (!$this->user) {
            session()->flash('error', 'Usuario no encontrado.');
            return Redirect::route('users');
        }
    }

    public function save()
    {
        $validRoles = Role::whereIn('id', $this->PrivilegeEdit->roles)->pluck('name')->toArray();
        if (!empty($validRoles)) {
            $this->user->syncRoles($validRoles);
        } else {
            session()->flash('error', 'No se encontraron roles válidos para asignar.');
        }
        $this->PrivilegeEdit->reset();
        $this->PrivilegeEdit->roles = $this->user->roles->pluck('id')->toArray();

        
      
    }


    public function render()
    {
        return view('livewire.page.privilege.privileges');
    }
}
