<?php

namespace App\Livewire\Page\BoxNat;

use App\Models\BoxNat;
use Livewire\Component;

class BoxNats extends Component
{

    public $id;
    public $boxNats;
    public $message;
    public $showModalDelete = false;

    public function openModalDelete($id)
    {
        $this->id = $id;
    }

    
    public function delete()
    {
        if ($this->id) {
            BoxNat::find($this->id)->delete();
            $this->showModalDelete = false;
            $this->boxNats= BoxNat::get();
        } else {
            $this->message = "Ocurrio un Error";
        }
    }



    public function mount()
    {
        $this->boxNats = BoxNat::get();
    }


    public function render()
    {
        return view('livewire.page.box-nat.box-nats');
    }
}
