<?php

namespace App\Livewire\Page\Installation;

use App\Livewire\Forms\installation\InstallationCreateFrom;
use App\Models\Installation;
use App\Models\Service;
use App\Models\Worker;
use Livewire\Component;

class InstallationEdit extends Component
{
    public InstallationCreateFrom $InstallationCreate;
    public $id;
    public $installation;
    public $services;
    public $workers;



    public function mount($id) {
        $this->services = Service::get();
        $this->workers = Worker::get();
        $this->id = $id;
        $this->installation =  Installation::find($this->id);
        
        $this->InstallationCreate->name = $this->installation->name;
        $this->InstallationCreate->email = $this->installation->email;
        $this->InstallationCreate->phone = $this->installation->phone;
        $this->InstallationCreate->address= $this->installation->address;
        $this->InstallationCreate->service_id= $this->installation->service;
        $this->InstallationCreate->worker_id= $this->installation->worker_id;
        $this->InstallationCreate->worker_id= $this->installation->worker_id;
        $this->InstallationCreate->installation_date= $this->installation->installation_date;
        $this->InstallationCreate->hour= $this->installation->hour;
        $this->InstallationCreate->observation= $this->installation->observation;
        $this->InstallationCreate->code= $this->installation->code;
        


    }

    public function save()
    {
        $this->InstallationCreate->validate();

        $this->installation->update([
            'name' => $this->BoxNatEdit->name,
            'email' => $this->BoxNatEdit->email,
            'phone'=>$this->InstallationCreate->phone,
            'address' => $this->BoxNatEdit->address,
            'service_id'=>$this->BoxNatEdit->service_id,
            'worker_id'=>$this->BoxNatEdit->worker_id,
            'installation_date'=>$this->BoxNatEdit->installation_date,
            'hour'=>$this->BoxNatEdit->hour,
            'observation'=>$this->BoxNatEdit->observation,
            'code'=>$this->BoxNatEdit->code,
            
            
        ]);

        $this->installation->refresh();
        
        $this->InstallationCreate->reset();
        $this->redirect("/installations");
    }


    public function render()
    {
        return view('livewire.page.installation.installation-edit');
    }
}
