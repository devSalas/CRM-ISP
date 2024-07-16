<?php

namespace App\Livewire\Page\Installation;

use App\Livewire\Forms\installation\InstallationCreateFrom;
use App\Models\Installation;
use App\Models\Service;
use App\Models\Worker;
use Livewire\Component;

class InstallationCreate extends Component
{
    public InstallationCreateFrom $InstallationCreate;
    public $services;
    public $workers;

    public function save()
    {
        /* dd($this->InstallationCreate); */
        $this->InstallationCreate->validate();
          $installation = Installation::create(
            $this->InstallationCreate->only(['name','phone','email','address','service_id','worker_id','installation_date','hour','observation','code'])
        );
        $this->InstallationCreate->reset();
        $this->redirect("/installations");
    }

    public function mount() {
        $this->services = Service::get();
        $this->workers = Worker::get();
    }

    public function render()
    {
        return view('livewire.page.installation.installation-create');
    }
}
