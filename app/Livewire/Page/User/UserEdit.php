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
        $this->UserEdit->zone = $this->user->zone;
        $this->UserEdit->address = $this->user->address;
        $this->UserEdit->DNI = $this->user->DNI;
        $this->UserEdit->CE = $this->user->CE;
        $this->UserEdit->age = $this->user->age;
        $this->UserEdit->gender = $this->user->gender;
        $this->UserEdit->district = $this->user->district;

        $this->UserEdit->roles = $this->user->roles->pluck('id')->toArray();
    }

    public function updateUser()
    {
        $this->UserEdit->validate();

        $this->user->update([
            'name' => $this->UserEdit->name,
            'email' => $this->UserEdit->email,
            'phone' => $this->UserEdit->phone,
            'zone' => $this->UserEdit->zone,
            'address' => $this->UserEdit->address,
            'DNI' => $this->UserEdit->DNI,
            'CE' => $this->UserEdit->CE,
            'age' => $this->UserEdit->age,
            'gender' => $this->UserEdit->gender,
            'district' => $this->UserEdit->district,
           ]);

        /*         if (count($this->UserCreate->roles)>0) {
            foreach ($this->UserCreate->roles as $key => $role) {
                $this->user->roles()->attach($role);

                if($role == 2){
                    $workerCreated =Worker::create([
                        "user_id"=>$this->user->id
                    ]);
                }
                if($role ==3){
                    $clientCreated =Client::create([
                        "user_id"=>$this->user->id
                    ]);
                }
            }   
        } */


        $this->user->refresh();

        $this->UserEdit->reset();
        $this->redirect("/users");
    }

    public function render()
    {
        return view('livewire.page.user.user-edit');
    }
}
