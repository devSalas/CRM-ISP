<?php

namespace App\Livewire\Forms\user;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserCreateForm extends Form
{
    #[Rule('required')]
    public $roles=[];

    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $email;

    #[Rule('required')]
    public $password;

    #[Rule('required')]
    public $phone;

    #[Rule('required')]
    public $gender;

    #[Rule('required')]
    public $age;

    #[Rule('required')]
    public $address;

    #[Rule('required')]
    public $DNI;


    public $CE;

    #[Rule('required')]
    public $zone;

    #[Rule('required')]
    public $district;

}
