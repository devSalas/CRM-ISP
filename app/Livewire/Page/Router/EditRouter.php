<?php

namespace App\Livewire\Page\Router;

use App\Livewire\Forms\router\RouterEditForm;
use App\Models\Router;
use Livewire\Attributes\On;
use Livewire\Component;

class EditRouter extends Component
{

    public RouterEditForm $RouterEdit;
    public $router;
    public $name;

    #[On('reset-form')]
    public function refreshPost()
    {
        /* $this->RouterCreate->resetValidation(); */
    }

    #[On('edit-router')]
    public function findRouter($id)
    {

        $this->router = Router::find($id);
        $this->router = Router::find($id)->first();

        if ($this->router) {
            /* $this->RouterEdit->name = $this->router->name; */
            $this->RouterEdit->description= $this->router->description;
            $this->RouterEdit->model = $this->router->model;
            $this->RouterEdit->ports = $this->router->ports;
            
        } else {
        
        }
    }

    public function update(){
        dd("entro");
    }

    



    public function save()
    {
        /* $this->RouterCreate->validate();

        
        $router = Router::create(
            $this->RouterEdit->only('name','description','model','ports')
        );

        $this->dispatch("routerCreated");
        $this->RouterCreate->reset();
 */
    }

    public function render()
    {


        return view('livewire.page.router.edit-router');
    }
}
