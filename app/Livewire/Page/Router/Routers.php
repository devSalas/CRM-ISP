<?php

namespace App\Livewire\Page\Router;

use App\Models\Router;
use Livewire\Attributes\On;
use Livewire\Component;

class Routers extends Component
{   
    
    public $routers;
    public $routerId;
    public $showModal = false;
    public $openEditModal= false;
    public $openDeleteEdit = false;
    
    #[On('refreshRouter')] 
    public function refreshRouter()
    {
        $this->routers= Router::get();
    }

    public function routerEdit($id)
    {
      $this->openEditModal = true;
      $this->dispatch('edit-router', ["id"=>$id]);
    } 


    

    public function mount()
    {
      $this->routers = Router::get();
    }




    public function render()
    {
        return view('livewire.page.router.routers');
    }
}
