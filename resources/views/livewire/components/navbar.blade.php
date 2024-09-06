<div x-data={large:false} :class="large ? 'w-48' : 'w-auto'"
    class="relative max-w-48 h-full bg-secondary border-2 border-secondary transition-all duration-100 ease-linear overflow-auto">

    {{-- BOTON PARA ABRIR O CERRAR EL NAVBAR --}}
    <div @click="large=!large" class="absolute top-2 right-2 text-txtsecondary text-2xl">
        <img src="{{ asset('./img/icon/arrow-icon.svg') }}" alt="">
    </div>

    <div class="flex flex-col gap-8 pt-8 justify-start rounded-r-2xl   text-white">
      
        @foreach ($items as $item)
        <a href="{{ route($item['path']) }}"
        class="flex justify-start items-center gap-4 px-8 py-4 w-full   {{ $currentRoute == $item['path'] ? 'bg-third text-black' : '' }}">
        <img src="{{ asset($item['img']) }}" class="min-w-8 max-w-8" alt="">
        <span :class="large ? '' : 'hidden'">{{ $item['title'] }}</span>
    </a>
        @endforeach


    </div>


</div>
