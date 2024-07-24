<div class="p-8 w-full">
    <h2 class="text-4xl mb-8">Editar Usuario</h2>
    <form wire:submit="updateUser" class="grid grid-cols-3   gap-4 w-full ">
        <div class=" col-span-3">
            <h2>Tipo de usuario</h2>

            <div class="divide-y divide-gray-200">
                <label for="Option1" class="flex cursor-pointer items-start gap-4 py-4">
                    <div class="flex items-center">
                        &#8203;
                        <input type="checkbox" wire:model="UserEdit.roles" value="3"
                            class="size-4 rounded border-gray-300" id="Option1" />
                    </div>

                    <div>
                        <strong class="font-medium text-gray-900"> Cliente </strong>

                        <p class="mt-1 text-pretty text-sm text-gray-700">
                            Este usuario no va poder hacer ni michi.
                        </p>
                    </div>
                </label>

                <label for="Option2" class="flex cursor-pointer items-start gap-4 py-4">
                    <div class="flex items-center">
                        &#8203;
                        <input type="checkbox" wire:model="UserEdit.roles" value="2"
                            class="size-4 rounded border-gray-300" id="Option2" />
                    </div>

                    <div>
                        <strong class="font-medium text-gray-900"> Trabajador </strong>

                        <p class="mt-1 text-pretty text-sm text-gray-700">
                            Este usuario va formar parte de la empresa y tiene privilegios limitados.
                        </p>
                    </div>
                </label>

                <label for="Option3" class="flex cursor-pointer items-start gap-4 py-4">
                    <div class="flex items-center">
                        &#8203;
                        <input type="checkbox" wire:model="UserEdit.roles" value="1"
                            class="size-4 rounded border-gray-300" id="Option3" />
                    </div>

                    <div>
                        <strong class="font-medium text-gray-900"> Admin </strong>

                        <p class="mt-1 text-pretty text-sm text-gray-700">
                            Este usuario va ser administrador del sistema, y tiene todos los privilegios.</p>
                    </div>
                </label>
            </div>
        </div>



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
            Dirección
            <x-input wire:model="UserEdit.address" class="w-full"></x-input>
            <x-input-error for="UserEdit.address" />
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

        <x-label>
            Zona
            <x-input wire:model="UserEdit.zone" class="w-full"></x-input>
            <x-input-error for="UserEdit.zone" />
        </x-label>

        <x-label class="w-full ">
            Distrito
            <x-input wire:model="UserEdit.district" class=" w-full"></x-input>
            <x-input-error for="UserEdit.distric" />
        </x-label>

        <div></div>

        <div class="w-full col-span-3  flex justify-end gap-4 ">
            <x-button type="button">Limpiar </x-button>
            <x-button wire:click="updateUser">Actualizar </x-button>
        </div>
    </form>

</div>
