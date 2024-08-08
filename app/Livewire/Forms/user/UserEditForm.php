<?php

namespace App\Livewire\Forms\user;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserEditForm extends Form
{

    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $email;

    #[Rule('required')]
    public $phone;

    #[Rule('required')]
    public $gender;

    #[Rule('required')]
    public $age;

    public $DNI;

    public $CE;



}
