<?php

namespace App\Livewire\Forms\privileges;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PrivilegeEditForm extends Form
{
   #[Rule("required")]
    public $roles=[];
}
