<?php

namespace App\Livewire\Page\Contract;

use App\Models\Contract;
use Livewire\Component;

class Contracts extends Component
{   
    public $contracts;


    public function mount(){
        $this->contracts = Contract::get();
    }

    public function render()
    {
        return view('livewire.page.contract.contracts');
    }
}
