<?php

namespace App\Livewire\Page\Installation;

use App\Livewire\Forms\installation\InstallationCreateFrom;
use App\Livewire\Page\User\Users;
use App\Models\Installation;
use App\Models\Sale;
use App\Models\Service;
use App\Models\User;
use App\Models\Worker;
use Carbon\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

class InstallationCreate extends Component
{
    public InstallationCreateFrom $InstallationCreate;
    public $services;
    public $workers;


    #[On('create-installation')]
    public function updateInstallation($id){
        dd($id);
        $sale= Sale::find($id);

       Installation::create([
        'name'=>$sale->name,
        'phone'=>$sale->phone,
        'email'=>$sale->email,
        'address'=>$sale->address,
        'service_id'=>$sale->service_id,
        'worker_id'=>$sale->user_id,
        'installation_date'=>Carbon::now()->format('d/m/y'),
        'hour'=>$sale->Carbon::now()->format('H:i'),
        'observation'=>$sale->observation,
        'code'=>0000,

       ]);
    }


    
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
        $this->workers = User::role(['worker'])->get();

    }

    public function render()
    {
        return view('livewire.page.installation.installation-create');
    }
}
