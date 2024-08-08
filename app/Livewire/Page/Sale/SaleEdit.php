<?php

namespace App\Livewire\Page\Sale;

use App\Livewire\Forms\Sale\SaleEditForm;
use App\Models\Service;
use App\Models\User;
use Livewire\Component;

class SaleEdit extends Component
{   
    public SaleEditForm $SaleEdit;
    public $id;
    public $services;
    public $users;

    public function mount(){
        $this->services = Service::get();
        $this->users = User::role('admin')->get();
    }
    
    public function render()
    {
        return view('livewire.page.sale.sale-edit');
    }
}
