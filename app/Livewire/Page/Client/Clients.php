<?php

namespace App\Livewire\Page\Client;

use App\Models\Client;
use Livewire\Component;

class Clients extends Component
{
    public $clients;
    public $id;
    public $message;
    public $filterDate;
    public $showModalDelete = false;

    public function mount(){
        $this->clients = Client::get();
    }

    public function render()
    {
        return view('livewire.page.client.clients');
    }
}
