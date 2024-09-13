<?php

namespace App\Livewire\Page\Sale;

use App\Livewire\Forms\Sale\SaleCreateForm;
use App\Models\Sale;
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
        $this->users = User::role(['worker','admin'])->get();
    }

    public function save(){
        $this->SaleCreate->validate();
        $sale = Sale::create(
            $this->SaleCreate->only(['name','email','phone','DNI','CE','address','observation','description','service_id','user_id'])
        );
        $this->SaleCreate->reset();
        $this->redirect("/sales");

    }
    
    public function render()
    {
        return view('livewire.page.sale.sale-create');
    }
}
