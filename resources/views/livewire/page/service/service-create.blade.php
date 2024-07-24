<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
<div class="p-8 w-full">
    <h2 class="text-4xl mb-8">Crear Servicio</h2>
    <form wire:submit="save" class="grid grid-cols-3   gap-4 w-full ">

        <x-label>
            Nombre
            <x-input wire:model="ServiceCreate.name" class="w-full"></x-input>
            <x-input-error for="ServiceCreate.name" />
        </x-label>

        <x-label>
            descripción|
            <x-input wire:model="ServiceCreate.description" class="w-full"></x-input>
            <x-input-error for="ServiceCreate.description" />
        </x-label>

        <x-label>
            precio
            <x-input wire:model="ServiceCreate.price" class="w-full"></x-input>
            <x-input-error for="ServiceCreate.price" />
        </x-label>
        <x-label>
            tvs
            <x-input wire:model="ServiceCreate.tvs" class="w-full"></x-input>
            <x-input-error for="ServiceCreate.tvs" />
        </x-label>
        <x-label>
            velocidad
            <x-input wire:model="ServiceCreate.speed" class="w-full"></x-input>
            <x-input-error for="ServiceCreate.speed" />
        </x-label>


        <div class="w-full col-span-3  flex justify-end gap-4 ">
            <a href="{{ route('services')}}">
                <x-button  type="button">Cancelar </x-button>
            </a>
            <x-button>Crear </x-button>
        </div>
    </form>

</div>