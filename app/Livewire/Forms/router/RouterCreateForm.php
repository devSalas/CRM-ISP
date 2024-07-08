<?php

namespace App\Livewire\Forms\router;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RouterCreateForm extends Form
{
    #[Rule('required')]
    public $name;
    
    #[Rule('required')]
    public $description;

    #[Rule('required')]
    public $model;

    #[Rule('required')]
    public $ports;
}
