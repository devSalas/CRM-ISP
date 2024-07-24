<?php

namespace App\Livewire\Page\ClientIssue;

use App\Models\ClientIssues;
use Livewire\Component;

class IssuesClient extends Component
{

    public $clientIssues;
    public function mount()
    {
        $this->clientIssues = ClientIssues::with('contracts')->get();
   
    }

    public function render()
    {
        return view('livewire.page.client-issue.issues-client');
    }
}
