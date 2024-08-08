<?php

namespace App\Livewire\Page\Sale;

use App\Models\Sale;
use Livewire\Component;

class Sales extends Component
{

    public $sales;
    public $showModalDelete=false;
    public $id;
    public $message;

    public function mount(){
        $this->sales = Sale::get();
    }

    public function delete($id){
        
        if($id){
            Sale::find($id)->delete();
            $this->showModalDelete=false;
            $this->sales= Sale::get();
        } else {
            $this->message = "Ocurrio un Error";
        }
    }




    

    public function render()
    {
        return view('livewire.page.sale.sales');
    }
}
