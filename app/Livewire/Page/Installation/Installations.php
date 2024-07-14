<?php

namespace App\Livewire\Page\Installation;

use App\Models\Installation;
use Livewire\Component;

class Installations extends Component
{
    public $Installations;
    public $id;
    public $message;
    public $showModalDelete = false;

    public function mount(){
        $this->Installations = Installation::get();
       
    }

    public function render()
    {
        return view('livewire.page.installation.installations');
    }
}
