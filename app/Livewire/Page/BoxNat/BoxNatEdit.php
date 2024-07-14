<?php

namespace App\Livewire\Page\BoxNat;

use App\Livewire\Forms\boxNat\BoxNatEditForm;
use App\Models\BoxNat;
use Livewire\Component;

class BoxNatEdit extends Component
{

    public BoxNatEditForm $BoxNatEdit;
    public $BoxNat;
    public $id;

    public function mount($id)
    {

        $this->BoxNat = BoxNat::find($id);
        $this->BoxNatEdit->name = $this->BoxNat->name;
        $this->BoxNatEdit->description = $this->BoxNat->description;
        $this->BoxNatEdit->state = $this->BoxNat->state;



        $this->id = $id;
    }


    public function updateUser()
    {
        $this->BoxNatEdit->validate();

        $this->BoxNat->update([
            'name' => $this->BoxNatEdit->name,
            'description' => $this->BoxNatEdit->description,
            'state' => $this->BoxNatEdit->state,
        ]);

        $this->BoxNat->refresh();
        
        $this->BoxNatEdit->reset();
        $this->redirect("/boxnats");
    }

 



    public function render()
    {
        return view('livewire.page.box-nat.box-nat-edit');
    }
}