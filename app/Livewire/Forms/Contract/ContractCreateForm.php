<?php

namespace App\Livewire\Forms\Contract;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContractCreateForm extends Form
{
    
    #[Rule('require')]
    public $code;
    

}
