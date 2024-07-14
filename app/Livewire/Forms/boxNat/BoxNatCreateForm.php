<?php

namespace App\Livewire\Forms\boxNat;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class BoxNatCreateForm extends Form
{
    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $description;

    #[Rule('required')]
    public $state;
}
