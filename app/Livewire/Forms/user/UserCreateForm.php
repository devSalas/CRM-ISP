<?php

namespace App\Livewire\Forms\user;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserCreateForm extends Form
{

    #[Rule('required')]
    public $name;

    #[Rule('required|email|unique:users,email')]
    public $email;

    #[Rule('required')]
    public $password;

    #[Rule('required')]
    public $phone;

    #[Rule('required')]
    public $gender; 

    #[Rule('required')]
    public $age;

    public $DNI;

    public $CE;



}
