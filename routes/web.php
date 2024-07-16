<?php

use App\Livewire\Page\BoxNat\BoxNatCreate;
use App\Livewire\Page\BoxNat\BoxNatEdit;
use App\Livewire\Page\BoxNat\BoxNats;
use App\Livewire\Page\Client\Clients;
use App\Livewire\Page\Dashboard;
use App\Livewire\Page\Installation\InstallationCreate;
use App\Livewire\Page\Installation\InstallationEdit;
use App\Livewire\Page\Installation\Installations;
use App\Livewire\Page\Router\Routers;
use App\Livewire\Page\User\UserCreate;
use App\Livewire\Page\User\UserEdit;
use App\Livewire\Page\User\UserId;
use App\Livewire\Page\User\Users;
use App\Livewire\Page\Worker\WorkerCreate;
use App\Livewire\Page\Worker\WorkerEdit;
use App\Livewire\Page\Worker\Workers;
use App\Livewire\Service\ServiceCreate;
use App\Livewire\Service\ServiceEdit;
use App\Livewire\Service\Services;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
 /*    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard'); */


    Route::get('/users',Users::class)->name("users");
    Route::get('/users/create',UserCreate::class)->name("create-user");
    Route::get('/users/{id}',UserId::class)->name("users-id");
    Route::get('/users/edit/{id}',UserEdit::class)->name("edit-user");
    Route::get('/dashboard',Dashboard::class)->name("dashboard");
    Route::get('/routers',Routers::class)->name("routers");
    Route::get('/boxnats',BoxNats::class)->name("boxnats");
    Route::get('/boxnats/edit/{id}',BoxNatEdit::class)->name("edit-boxnat");
    Route::get('/boxnats/create',BoxNatCreate::class)->name("create-boxnat");

    Route::get('/services',Services::class)->name("services");
    Route::get('/services/create',ServiceCreate::class)->name("create-service");
    Route::get('/services/edit/{id}',ServiceEdit::class)->name("edit-service");
    
    Route::get('/installations',Installations::class)->name("installations");
    Route::get('/installations/create',InstallationCreate::class)->name("create-installation");
    Route::get('/installations/edit/{id}',InstallationEdit::class)->name("edit-installation");

    Route::get('/workers',Workers::class)->name("workers");
    Route::get('/workers/create',WorkerCreate::class)->name("create-worker");
    Route::get('/workers/edit/{id}',WorkerEdit::class)->name("edit-worker");
    
    Route::get('/clients',Workers::class)->name("workers");
    /*     Route::get('/clients/create',Create::class)->name("create-worker");
    Route::get('/clients/edit/{id}',WorkerEdit::class)->name("edit-worker"); */
    Route::get('/clients',Clients::class)->name("clients");

});
