<div>
    <fieldset class="col-span-3">
        <h2>Tipo de usuario</h2>
        <legend class="sr-only">Tipo de usuario</legend>

        <div class="divide-y divide-gray-200">
            <label for="Option1" class="flex cursor-pointer items-start gap-4 py-4">
                <div class="flex items-center">
                    &#8203;
                    <input type="checkbox" wire:model="UserCreate.roles" value="3"
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
                    <input type="checkbox" wire:model="UserCreate.roles" value="2"
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
                    <input type="checkbox" wire:model="UserCreate.roles" value="1"
                        class="size-4 rounded border-gray-300" id="Option3" />
                </div>

                <div>
                    <strong class="font-medium text-gray-900"> Admin </strong>

                    <p class="mt-1 text-pretty text-sm text-gray-700">
                        Este usuario va ser administrador del sistema, y tiene todos los privilegios.</p>
                </div>
            </label>

            <br>
            ROLES SECUNDARIOS


            <label for="Option4" class="flex cursor-pointer items-start gap-4 py-4">
                <div class="flex items-center">
                    &#8203;
                    <input type="checkbox" wire:model="UserCreate.roles" value="1"
                        class="size-4 rounded border-gray-300" id="Option4" />
                </div>

                <div>
                    <strong class="font-medium text-gray-900"> Instalador </strong>

                    <p class="mt-1 text-pretty text-sm text-gray-700">
                        Este usuario va ser administrador del sistema, y tiene todos los privilegios.</p>
                </div>
            </label>
            <label for="Option5" class="flex cursor-pointer items-start gap-4 py-4">
                <div class="flex items-center">
                    &#8203;
                    <input type="checkbox" wire:model="UserCreate.roles" value="1"
                        class="size-4 rounded border-gray-300" id="Option5" />
                </div>

                <div>
                    <strong class="font-medium text-gray-900"> Vendedor </strong>

                    <p class="mt-1 text-pretty text-sm text-gray-700">
                        Este usuario va ser administrador del sistema, y tiene todos los privilegios.</p>
                </div>
            </label>
            <label for="Option6" class="flex cursor-pointer items-start gap-4 py-4">
                <div class="flex items-center">
                    &#8203;
                    <input type="checkbox" wire:model="UserCreate.roles" value="1"
                        class="size-4 rounded border-gray-300" id="Option5" />
                </div>

                <div>
                    <strong class="font-medium text-gray-900"> Marketing </strong>

                    <p class="mt-1 text-pretty text-sm text-gray-700">
                        Este usuario va ser administrador del sistema, y tiene todos los privilegios.</p>
                </div>
            </label>
{{-- 
            <br>
             PERMISOS


            <label for="Option4" class="flex cursor-pointer items-start gap-4 py-4">
                <div class="flex items-center">
                    &#8203;
                    <input type="checkbox" wire:model="UserCreate.roles" value="1"
                        class="size-4 rounded border-gray-300" id="Option4" />
                </div>

                <div>
                    <strong class="font-medium text-gray-900"> Instalador </strong>

                    <p class="mt-1 text-pretty text-sm text-gray-700">
                        Este usuario va ser administrador del sistema, y tiene todos los privilegios.</p>
                </div>
            </label>
            <label for="Option5" class="flex cursor-pointer items-start gap-4 py-4">
                <div class="flex items-center">
                    &#8203;
                    <input type="checkbox" wire:model="UserCreate.roles" value="1"
                        class="size-4 rounded border-gray-300" id="Option5" />
                </div>

                <div>
                    <strong class="font-medium text-gray-900"> Vendedor </strong>

                    <p class="mt-1 text-pretty text-sm text-gray-700">
                        Este usuario va ser administrador del sistema, y tiene todos los privilegios.</p>
                </div>
            </label>
            <label for="Option6" class="flex cursor-pointer items-start gap-4 py-4">
                <div class="flex items-center">
                    &#8203;
                    <input type="checkbox" wire:model="UserCreate.roles" value="1"
                        class="size-4 rounded border-gray-300" id="Option5" />
                </div>

                <div>
                    <strong class="font-medium text-gray-900"> Marketing </strong>

                    <p class="mt-1 text-pretty text-sm text-gray-700">
                        Este usuario va ser administrador del sistema, y tiene todos los privilegios.</p>
                </div>
            </label>

 --}}

        </div>
    </fieldset>
</div>
