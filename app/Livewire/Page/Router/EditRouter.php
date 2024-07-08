<?php

namespace App\Livewire\Page\Router;

use App\Livewire\Forms\router\RouterEditForm;
use App\Models\Router;
use Livewire\Attributes\On;
use Livewire\Component;

class EditRouter extends Component
{

        public RouterEditForm $RouterCreate;

    #[On('reset-form')] 
    public function refreshPost()
    {
        $this->RouterCreate->resetValidation();
    }

    #[On('edit-router')] 
    public function findRouter($id)
    {   
        dd($id);
     /*    $router = Router::find($id);
        $this->RouterCreate->name = $router->name;
       $this->RouterCreate->description = $router->description; */
    }




    public function save()
    {
        $this->RouterCreate->validate();

        
        $router = Router::create(
            $this->RouterCreate->only('name','description','model','ports')
        );

        $this->dispatch("routerCreated");
        $this->RouterCreate->reset();


        
    }
    
    public function render()
    {
        

        return view('livewire.page.router.edit-router');
    }
}
