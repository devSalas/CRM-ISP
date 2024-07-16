<?php

namespace App\Livewire\Forms\installation;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InstallationCreateFrom extends Form
{

    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $email;

    #[Rule('required')]
    public $phone;

    #[Rule('required')]
    public $service_id;

    #[Rule('required')]
    public $installation_date;

    #[Rule('required')]
    public $hour;

    #[Rule('required')]
    public $address;

    #[Rule('required')]
    public $worker_id;

    #[Rule('required')]
    public $code;

    #[Rule('required')]
    public $observation;
}
