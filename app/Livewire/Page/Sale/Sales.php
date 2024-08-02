<?php

namespace App\Livewire\Page\Sale;

use App\Models\Sale;
use Livewire\Component;

class Sales extends Component
{

    public $sales;

    public function mount(){
        $this->sales = Sale::get();
    }

    public function render()
    {
        return view('livewire.page.sale.sales');
    }
}
