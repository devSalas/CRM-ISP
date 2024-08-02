<?php

namespace App\Livewire\Page\Contract;

use App\Livewire\Forms\Contract\ContractCreateForm;
use Livewire\Component;

class ContractCreate extends Component
{
    public ContractCreateForm $contractCreate;
    

    public function render()
    {
        return view('livewire.page.contract.contract-create');
    }
}
