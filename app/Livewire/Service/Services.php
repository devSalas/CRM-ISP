<?php

namespace App\Livewire\Service;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{

    public $id;
    public $services;
    public $message;
    public $showModalDelete = false;



    public function openModalDelete($id)
    {

        $this->id = $id;
    }
    
    public function delete()
    {
        if ($this->id) {
            Service::find($this->id)->delete();
            $this->showModalDelete = false;
            $this->services= Service::get();
        } else {
            $this->message = "Ocurrio un Error";
        }
    }



    public function mount()
    {
        $this->services = Service::get();
    }

    public function render()
    {
        return view('livewire.service.services');
    }
}
