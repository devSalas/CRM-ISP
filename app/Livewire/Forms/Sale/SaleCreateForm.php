<?php

namespace App\Livewire\Forms\Sale;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SaleCreateForm extends Form
{
    #[Rule('required')]
    public $name;
    
    #[Rule('')]
    public $email;
    
    #[Rule('required|min:9|max:20')]
    public $phone;

    #[Rule('')]
    public $DNI;
    
    #[Rule('')]
    public $CE;


    #[Rule('required')]
    public $address;


    #[Rule('required')]
    public $observation;

    #[Rule('')]
    public $description;

    #[Rule('required|exists:services,id')]
    public $service_id;

    #[Rule('required|exists:users,id')]
    public $user_id;

}
