<?php

namespace App\Livewire\Page;

use App\Models\BoxNat;
use App\Models\Client;
use App\Models\Installation;
use App\Models\Router;
use App\Models\User;
use App\Models\Worker;
use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
{

    public $routers;
    public $boxNats;
    public $clients;
    public $workers;
    public $users;
    public $today;
    public $installationsForToday;

    public function mount(){
         $this->routers = Router::count();
         $this->boxNats = BoxNat::count();
         $this->clients = Client::count();
         $this->workers = Worker::count();
         $this->users = User::count();

         $this->today = Carbon::now()->format('Y-m-d');
         $this->installationsForToday = Installation::where('installation_date', 'like', $this->today . '%')->get();
    }
    
    public function render()
    {
        return view('livewire.page.dashboard');
    }
}
