<?php

namespace App\Livewire\Service;

use App\Livewire\Forms\service\ServiceCreateForm;
use App\Models\Service;
use Livewire\Component;

class ServiceEdit extends Component
{

    public $id;
    public $Service;
    public ServiceCreateForm $ServiceEdit;


    public function mount($id)
    {
        $this->id = $id;
        $this->Service = Service::find($this->id);
        $this->ServiceEdit->name = $this->Service->name;
        $this->ServiceEdit->description = $this->Service->description;
        $this->ServiceEdit->price = $this->Service->price;
        $this->ServiceEdit->tvs = $this->Service->tvs;
        $this->ServiceEdit->speed = $this->Service->speed;
    }


    public function save()
    {
        $this->ServiceEdit->validate();

        $this->Service->update([
            'name' => $this->Service->name,
            'description' => $this->Service->description,
            'price' => $this->Service->price,
            'tvs' => $this->Service->tvs,
            'speed' => $this->Service->speed,
        ]);

        $this->Service->refresh();
        
        $this->ServiceEdit->reset();
        $this->redirect("/services");
    }


    public function render()
    {
        return view('livewire.service.service-edit');
    }
}
