<?php

namespace App\Livewire\Page\BoxNat;

use App\Livewire\Forms\boxNat\BoxNatCreateForm;
use App\Models\BoxNat;
use Livewire\Component;

class BoxNatCreate extends Component
{

    public BoxNatCreateForm $BoxNatCreate;


    public function save()
    {   /* dd($this->BoxNatCreate); */
        $this->BoxNatCreate->validate();
          $boxNat = BoxNat::create(
            $this->BoxNatCreate->only(['name','description','state'])
        );
        $this->BoxNatCreate->reset();
        $this->redirect("/boxnats");
    }

    public function render()
    {
        return view('livewire.page.box-nat.box-nat-create');
    }
}
