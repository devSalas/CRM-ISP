<?php

namespace App\Livewire\Page\User;

use App\Livewire\Forms\user\UserEditForm;
use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{

    public $userId;
    public $user;
    public UserEditForm $UserEdit;


    public function mount($id)
    {
        $this->userId = $id;

        $this->user = User::find($this->userId);

        $this->UserEdit->name = $this->user->name;
        $this->UserEdit->email = $this->user->email;
        $this->UserEdit->phone = $this->user->phone;
        $this->UserEdit->DNI = $this->user->DNI;
        $this->UserEdit->CE = $this->user->CE;
        $this->UserEdit->age = $this->user->age;
        $this->UserEdit->gender = $this->user->gender;
    }

    public function updateUser()
    {

      
        $this->UserEdit->validate();

        $this->user->update([
            'name' => $this->UserEdit->name,
            'email' => $this->UserEdit->email,
            'phone' => $this->UserEdit->phone,
            'DNI' => $this->UserEdit->DNI,
            'CE' => $this->UserEdit->CE,
            'age' => $this->UserEdit->age,
            'gender' => $this->UserEdit->gender,
        ]);



        $this->user->refresh();

        $this->UserEdit->reset();

        $this->redirect("/users");
    }

    public function render()
    {
        return view('livewire.page.user.user-edit');
    }
}
