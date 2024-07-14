<div class="p-8 w-full">
    <h2 class="text-4xl mb-8">Crear Usuarios</h2>
    <form wire:submit="save" class="grid grid-cols-3   gap-4 w-full ">

        <x-label>
            Nombre
            <x-input wire:model="UserCreate.name" class="w-full"></x-input>
            <x-input-error for="UserCreate.name" />
        </x-label>

        <x-label>
            Correo electronico
            <x-input wire:model="UserCreate.email" class="w-full"></x-input>
            <x-input-error for="UserCreate.email" />
        </x-label>

        <x-label>
            Contraseña
            <x-input wire:model="UserCreate.password" class="w-full"></x-input>
            <x-input-error for="UserCreate.password" />
        </x-label>

        <x-label>
            Telefono
            <x-input wire:model="UserCreate.phone" class="w-full"></x-input>
            <x-input-error for="UserCreate.phone" />
        </x-label>

        <x-label>
            género
            <x-input wire:model="UserCreate.gender"  class="w-full"></x-input>
            <x-input-error for="UserCreate.gender" />
        </x-label>

        <x-label>
            Edad
            <x-input  wire:model="UserCreate.age" class="w-full"></x-input>
            <x-input-error for="UserCreate.age" />
        </x-label>

        <x-label>
            Dirección
            <x-input wire:model="UserCreate.address" class="w-full"></x-input>
            <x-input-error for="UserCreate.address" />
        </x-label>

        <x-label>
            DNI
            <x-input wire:model="UserCreate.DNI" class="w-full"></x-input>
            <x-input-error for="UserCreate.DNI" />
        </x-label>

        <x-label>
            Carnét de extranjería
            <x-input wire:model="UserCreate.CE"  class="w-full"></x-input>
            <x-input-error for="UserCreate.CE" />
        </x-label>

        <x-label>
            Zona
            <x-input wire:model="UserCreate.zone" class="w-full"></x-input>
            <x-input-error for="UserCreate.zone" />
        </x-label>

            <x-label class="w-full ">
                Distrito
                <x-input wire:model="UserCreate.district"  class=" w-full"></x-input>
                <x-input-error for="UserCreate.distric" />
            </x-label>

        <div></div>

        <div class="w-full col-span-3  flex justify-end gap-4 ">
            <a href="{{ route('users')}}">
                <x-button  type="button">Cancelar </x-button>
            </a>
            <x-button>Crear </x-button>
        </div>
    </form>

</div>
