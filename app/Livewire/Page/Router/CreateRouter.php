<?php

namespace App\Livewire\Page\Router;

use App\Livewire\Forms\router\RouterCreateForm;
use App\Models\Router;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateRouter extends Component
{

    public RouterCreateForm $RouterCreate;

    #[On('reset-form')] 
    public function refreshPost()
    {
        $this->RouterCreate->resetValidation();
    }


    public function save()
    {
        $this->RouterCreate->validate();

        
        $router = Router::create(
            $this->RouterCreate->only('name','description','model','ports')
        );

        $this->dispatch("refreshRouter");
        $this->RouterCreate->reset();


        
    }
    public function render()
    {
        return view('livewire.page.router.create-router');
    }
}
