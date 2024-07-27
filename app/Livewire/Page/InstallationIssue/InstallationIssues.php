<?php

namespace App\Livewire\Page\InstallationIssue;

use App\Models\InstallationIssue;
use Livewire\Component;

class InstallationIssues extends Component
{

    public $issues;

    public function mount(){
        $this->issues = InstallationIssue::with(["contract","worker"])->get();
    }

    public function render()
    {
       

        return view('livewire.page.installation-issue.installation-issues');
    }
}
