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
       /*  dd($this->UserCreate); */

        $this->user = User::create(
            $this->UserCreate->only(['name', 'password', 'email', 'phone', 'gender', 'age', 'address', 'DNI', 'CE', 'zone', 'district'])
        );

        if (count($this->UserCreate->roles)>0) {
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
        }


        $this->UserCreate->validate();



        $this->UserCreate->reset();
        $this->redirect("/users");
    }

    public function render()
    {
        return view('livewire.page.user.user-create');
    }
}
