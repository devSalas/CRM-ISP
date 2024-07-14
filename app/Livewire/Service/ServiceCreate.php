<?php

namespace App\Livewire\Service;

use App\Livewire\Forms\service\ServiceCreateForm;
use App\Models\Service;
use Livewire\Component;

class ServiceCreate extends Component
{
    public ServiceCreateForm $ServiceCreate;
    
    public function save()
    {
        $this->ServiceCreate->validate();
          $user = Service::create(
            $this->ServiceCreate->only(['name','description','price','tvs','speed'])
        );
        $this->ServiceCreate->reset();
        $this->redirect("/services");
    }

    public function render()
    {
        return view('livewire.service.service-create');
    }
}
