<?php

namespace App\Livewire\Page\Worker;

use App\Models\User;
use App\Models\Worker;
use Livewire\Component;

class Workers extends Component
{
    public $workers;
    public $id;
    public $message;
    public $filterDate;
    public $showModalDelete = false;

    public function mount(){
        $this->workers = User::role('worker')->get();
        
    }

    public function render()
    {
        return view('livewire.page.worker.workers');
    } 
}
