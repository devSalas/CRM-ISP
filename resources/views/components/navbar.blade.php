@php
    $currentRoute = Route::currentRouteName();

    $items = [
        'dashboard' => [
            'img' => 'img/icon/dashboard-icon.svg',
            'path' => 'dashboard',
            'title' => 'Dashboard',
        ],
        'users' => [
            'img' => 'img/icon/users-icon.svg',
            'path' => 'users',
            'title' => 'Usuarios',
        ],
        'routers' => [
            'img' => 'img/icon/router-icon.svg',
            'path' => 'routers',
            'title' => 'Routers',
        ],

        'Caja Nats' => [
            'img' => 'img/icon/nat-icon.svg',
            'path' => 'boxnats',
            'title' => 'Cajas Nat',
        ],

        'Servicios' => [
            'img' => 'img/icon/services-icon.svg',
            'path' => 'services',
            'title' => 'Servicios',
        ],
        

    ];
@endphp

<div x-data={large:false} :class="large ? 'w-48' : 'w-auto'"
    class="relative  max-w-48  bg-secondary border-2 border-secondary transition-all duration-100 ease-linear">

    <div @click="large=!large" class="absolute top-2 right-2 text-txtsecondary text-2xl">
        >
    </div>

    <div class="flex flex-col gap-8 pt-8 justify-start rounded-r-2xl h-full  text-white">

        @foreach ($items as $item)
            <a href="{{ route($item['path']) }}"
                class="flex justify-center items-center gap-4 px-8 py-4 w-full   {{ $currentRoute == $item['path'] ? 'bg-third text-black' : '' }}">
                <img src="{{ asset($item['img']) }}" class="min-w-8 max-w-8" alt="">
                <span :class="large ? '' : 'hidden'">{{ $item['title'] }}</span>
            </a>
        @endforeach

    </div>


</div>
