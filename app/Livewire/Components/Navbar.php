<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public $items = [];
    public $currentRoute;
    public $filteredItems = [];
    public $user;

    public function mount()
    {
        $this->currentRoute = Route::currentRouteName();

        $this->user = Auth::user();
     
        
        $this->items = [
            'users' => [
                'img' => 'img/icon/users-icon.svg',
                'path' => 'users',
                'title' => 'Usuarios',
                'roles' => ['client'],
            ],
            'workers' => [
                'img' => 'img/icon/worker-icon.svg',
                'path' => 'workers',
                'title' => 'Trabajadores',
                'roles' => ['admin', 'manager'],
            ],
            'clients' => [
                'img' => 'img/icon/client-icon.svg',
                'path' => 'clients',
                'title' => 'Clientes',
                'roles' => ['admin'],
            ],
            'contracts' => [
                'img' => 'img/icon/contract-icon.svg',
                'path' => 'contracts',
                'title' => 'Contratos',
                'roles' => ['admin', 'user'],
            ],
            'routers' => [
                'img' => 'img/icon/router-icon.svg',
                'path' => 'routers',
                'title' => 'Routers',
                'roles' => ['admin'],
            ],
            'boxnats' => [
                'img' => 'img/icon/nat-icon.svg',
                'path' => 'boxnats',
                'title' => 'Cajas Nat',
                'roles' => ['admin'],
            ],
            'services' => [
                'img' => 'img/icon/services-icon.svg',
                'path' => 'services',
                'title' => 'Servicios',
                'roles' => ['admin', 'user'],
            ],
            'activities' => [
                'img' => 'img/icon/installer-icon.svg',
                'path' => 'activities',
                'title' => 'Actividades',
                'roles' => ['admin', 'user'],
            ],
            'sales' => [
                'img' => 'img/icon/sale-icon.svg',
                'path' => 'sales',
                'title' => 'Ventas',
                'roles' => ['admin', 'user'],
            ],
        ];
        $this->filterItemsByRole();
    }

    public function filterItemsByRole()
    {
        $this->filteredItems = collect($this->items)->filter(function ($item) {
    
            return $this->user->hasAnyRole($item['roles']);
        })->toArray();

       
    }

    public function render()
    {
        return view('livewire.components.navbar', [
            'data' => $this->filteredItems,
        ]);
    }
}
