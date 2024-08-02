<?php

namespace App\Livewire\Page\Contract;

use App\Livewire\Forms\Contract\ContractCreateForm;
use App\Models\Service;
use App\Models\User;
use Livewire\Component;

class ContractCreate extends Component
{
    public ContractCreateForm $contractCreate;
    public $services;
   

    public function mount()
    {
        $this->services = Service::get();
      

    }

    public function render()
    {
        return view('livewire.page.contract.contract-create');
    }
}
