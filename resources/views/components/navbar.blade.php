@php
    $currentRoute = Route::currentRouteName();

@endphp

<div class="flex  justify-center items-start ">
    <div class="flex flex-col items-center gap-8 py-12 px-2 rounded-2xl bg-secondary text-white">
        <a href="{{ route('dashboard') }}" class="block w-full   px-16 py-3 rounded-lg  {{ $currentRoute == 'dashboard' ? 'bg-third text-black' : '' }}">Dashboard</a> 
        <a href="{{ route('users') }}" class="block w-full   px-16 py-3 rounded-lg {{ $currentRoute == 'users' ? 'bg-third text-black' : '' }}">Usuarios</a> 
        <a href="{{ route('dashboard') }}" class="block w-full   px-16 py-3 rounded-lg  {{ $currentRoute == 'clients' ? 'bg-third text-black' : '' }}">Clientes</a> 
        <a href="{{ route('routers') }}" class="block w-full   px-16 py-3 rounded-lg  {{ $currentRoute == 'routers' ? 'bg-third text-black' : '' }}">Routers</a> 
       
    </div>
</div>