<?php

namespace App\Livewire\Page\ClientIssue;

use App\Models\ClientIssues;
use App\Models\Worker;
use Livewire\Component;

class IssuesClient extends Component
{

    public $clientIssues;
    public $workers;
    
    public function mount()
    {

        $this->workers = Worker::get();
        $this->clientIssues = ClientIssues::get();
        /* $this->clientIssues = ClientIssues::with(['worker'])->get(); */
        /* dd($this->clientIssues); */
    }

    public function render()
    {
        return view('livewire.page.client-issue.issues-client');
    }
}
