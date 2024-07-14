<?php

namespace App\Livewire\Forms\service;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ServiceCreateForm extends Form
{
    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $description;

    #[Rule('required')]
    public $price;
    #[Rule('required')]
    public $tvs;
    #[Rule('required')]
    public $speed;
}
