<?php

namespace App\Livewire\Page\Sale;

use App\Livewire\Forms\Sale\SaleCreateForm;
use App\Models\Service;
use App\Models\User;
use Livewire\Component;

class SaleCreate extends Component
{

    public SaleCreateForm $SaleCreate;
    public $services;
    public $users;
    public function mount(){
        $this->services = Service::get();
        $this->users = User::role('admin')->get();
    }

    public function save(){
        $this->SaleCreate->validate();
        dd($this->SaleCreate);
    }
    
    public function render()
    {
        return view('livewire.page.sale.sale-create');
    }
}
