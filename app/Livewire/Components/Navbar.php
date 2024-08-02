<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public $items = [];
    public $currentRoute;
    public $filteredItems;
    public $user;
    public function mount()
    {
        $this->currentRoute = Route::currentRouteName();
        // Obtener el usuario actual
        $this->user = Auth::user();
        // Definir los elementos de la barra de navegación
        $this->items = [
            'users' => [
                'img' => 'img/icon/users-icon.svg',
                'path' => 'users',
                'title' => 'Usuarios',
                'roles' => ['admin'],
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
            'contracts' => [ // Renombrado para consistencia
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
            'boxnats' => [ // Renombrado para consistencia
                'img' => 'img/icon/nat-icon.svg',
                'path' => 'boxnats',
                'title' => 'Cajas Nat',
                'roles' => ['admin'],
            ],
            'services' => [ // Renombrado para consistencia
                'img' => 'img/icon/services-icon.svg',
                'path' => 'services',
                'title' => 'Servicios',
                'roles' => ['admin', 'user'],
            ],
            'activities' => [ // Renombrado para consistencia
                'img' => 'img/icon/installer-icon.svg',
                'path' => 'activities',
                'title' => 'Actividades',
                'roles' => ['admin', 'user'],
            ],
        ];
    }

    public function render()
    {
      

        // Filtrar los elementos según los roles del usuario
        $this->filteredItems = array_filter($this->items, function($item) {
            return $this->user->hasAnyRole($item['roles']);
        });

        return view('livewire.components.navbar');
    }
}
