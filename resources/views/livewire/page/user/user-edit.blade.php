<div class="p-8 w-full">
    <h2 class="text-4xl mb-8">Editar Usuario</h2>

    <div class="my-3 mb-8">
        <a href="{{route('privileges',['id'=> $userId]) }}">
            <x-button class="py-3">Cambiar Privilegios</x-button>
        </a>
    </div>

    <form wire:submit="updateUser" class="grid grid-cols-3   gap-4 w-full ">
   


        <x-label>
            Nombre
            <x-input wire:model="UserEdit.name" class="w-full"></x-input>
            <x-input-error for="UserEdit.name" />
        </x-label>

        <x-label>
            Correo electronico
            <x-input wire:model="UserEdit.email" class="w-full"></x-input>
            <x-input-error for="UserEdit.email" />
        </x-label>


        <x-label>
            Telefono
            <x-input wire:model="UserEdit.phone" class="w-full"></x-input>
            <x-input-error for="UserEdit.phone" />
        </x-label>

        <x-label>
            género
            <x-input wire:model="UserEdit.gender" class="w-full"></x-input>
            <x-input-error for="UserEdit.gender" />
        </x-label>

        <x-label>
            Edad
            <x-input wire:model="UserEdit.age" class="w-full"></x-input>
            <x-input-error for="UserEdit.age" />
        </x-label>


        <x-label>
            DNI
            <x-input wire:model="UserEdit.DNI" class="w-full"></x-input>
            <x-input-error for="UserEdit.DNI" />
        </x-label>

        <x-label>
            Carnét de extranjería
            <x-input wire:model="UserEdit.CE" class="w-full"></x-input>
            <x-input-error for="UserEdit.CE" />
        </x-label>



        <div></div>

        <div class="w-full col-span-3  flex justify-end gap-4 ">
            <x-button type="button">Limpiar </x-button>
            <x-button wire:click="updateUser">Actualizar </x-button>
        </div>
    </form>

</div>
