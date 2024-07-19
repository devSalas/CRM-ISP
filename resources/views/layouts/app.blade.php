<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <style>
        * {
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>



<body class="font-sans antialiased relative ">
    {{--  <x-banner /> --}}

    <div class="flex flex-col h-screen w-screen overflow-hidden ">
            @livewire('navigation-menu')
        <div class="flex flex-row   h-calc-screen  w-full overflow-hidden">
            <div class=" h-full bg-green-300">
                <x-navbar />
            </div>
            
            <div class="w-full grow  p-4 overflow-y-auto overflow-x-hidden">
             {{$slot}}
            
            </div> 
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
