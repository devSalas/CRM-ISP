<div class="p-8 w-full">
    <h2 class="text-4xl mb-8">Editar Servicio</h2>
    <form wire:submit="save" class="grid grid-cols-3   gap-4 w-full ">

        <x-label>
            Nombre
            <x-input wire:model="ServiceEdit.name" class="w-full"></x-input>
            <x-input-error for="ServiceEdit.name" />
        </x-label>

        <x-label>
            descripción
            <x-input wire:model="ServiceEdit.description" class="w-full"></x-input>
            <x-input-error for="ServiceEdit.description" />
        </x-label>
        <x-label>
            precio
            <x-input wire:model="ServiceEdit.price" class="w-full"></x-input>
            <x-input-error for="ServiceEdit.price" />
        </x-label>
        <x-label>
            TVs
            <x-input wire:model="ServiceEdit.tvs" class="w-full"></x-input>
            <x-input-error for="ServiceEdit.tvs" />
        </x-label>

        <x-label>
            velocidad
            <x-input wire:model="ServiceEdit.speed"  class="w-full"></x-input>
            <x-input-error for="ServiceEdit.speed" />
        </x-label>


        <div class="w-full col-span-3  flex justify-end gap-4 ">
            <x-button  type="button">Cancelar </x-button>
            <x-button >Actualizar </x-button>
        </div>
    </form>

</div>
