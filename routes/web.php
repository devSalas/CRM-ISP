<?php

use App\Livewire\Page\Dashboard;
use App\Livewire\Page\Router\Routers;
use App\Livewire\Page\User\Users;
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
    Route::get('/dashboard',Dashboard::class)->name("dashboard");
    Route::get('/routers',Routers::class)->name("routers");

});
