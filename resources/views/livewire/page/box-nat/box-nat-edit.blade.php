<div class="p-8 w-full">
    <h2 class="text-4xl mb-8">Editar Caja Nat</h2>
    <form wire:submit="updateUser" class="grid grid-cols-3   gap-4 w-full ">

        <x-label>
            Nombre
            <x-input wire:model="BoxNatEdit.name" class="w-full"></x-input>
            <x-input-error for="BoxNatEdit.name" />
        </x-label>

        <x-label>
            Descripción
            <x-input wire:model="BoxNatEdit.description" class="w-full"></x-input>
            <x-input-error for="BoxNatEdit.description" />
        </x-label>
        <x-label>
            Estado
            <x-input wire:model="BoxNatEdit.state" class="w-full"></x-input>
            <x-input-error for="BoxNatEdit.state" />
        </x-label>



        <div></div>

        <div class="w-full col-span-3  flex justify-end gap-4 ">
            <a href="{{ route('services')}}"><x-button type="button">Cancelar </x-button></a>
            <x-button wire:click="updateUser">Actualizar </x-button>
        </div>
    </form>

</div>
