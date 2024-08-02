<div class="p-8 w-full">
    <h2 class="text-4xl mb-8">Crear Caja Nap</h2>
    <form wire:submit="save" class="grid grid-cols-3   gap-4 w-full ">

        <x-label>
            Nombre
            <x-input wire:model="BoxNatCreate.name" class="w-full"></x-input>
            <x-input-error for="BoxNatCreate.name" />
        </x-label>

        <x-label>
            Descripción
            <x-input wire:model="BoxNatCreate.description" class="w-full"></x-input>
            <x-input-error for="BoxNatCreate.description" />
        </x-label>

        <x-label>
            Estado
            <x-input wire:model="BoxNatCreate.state" class="w-full"></x-input>
            <x-input-error for="BoxNatCreate.state" />
        </x-label>


        <div class="w-full col-span-3  flex justify-end gap-4 ">
            <a href="{{ route('boxnats')}}">
                <x-button  type="button">Cancelar </x-button>
            </a>
            <x-button>Crear </x-button>
        </div>
    </form>

</div>