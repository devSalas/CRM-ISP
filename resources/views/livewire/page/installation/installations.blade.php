<div x-data="{ showModalDelete: @entangle('showModalDelete'), selectedId: null }" class="mb-16">

    <h1 class="mb-8 text-4xl">Instalaciones</h1>

    <div class="flex justify-between w-full mb-8">
        <div>
            <label for="filterDate">Filtrar por fecha:</label>
            <input type="date" id="filterDate" wire:model.live="filterDate">
        </div>
        <x-button wire:click="resetFilter">Mostrar todos</x-button>
    </div>

    <div class="w-full relative overflow-x-auto">
        <table class="table-auto border-collapse min-w-full">
            <thead class="pb-8 bg-slate-300">
                <tr class="text-start">
                    <th class="text-start p-2">Nombre</th>
                    <th class="text-start p-2">Correo</th>
                    <th class="text-start p-2">Telefono</th>
                    <th class="text-start p-2">Dirección</th>
                    <th class="text-start p-2">Servicio</th>
                    <th class="text-start p-2">Fecha de instalación</th>
                    <th class="text-start p-2">Hora</th>
                    <th class="text-start p-2">Trabajador</th>
                    <th class="text-start p-2">Observación</th>
                    <th class="text-start p-2">Codigo</th>
                    <th class="sticky right-0 text-start p-2 left-0 top-0 bg-slate-300">Acciones</th>
                </tr>
            </thead>
            <tbody class="relative">
                @foreach ($installations as $installation)
                    <tr class="border-b-[1px] border-slate-300">
                        <td class="p-3 min-w-32">{{ $installation->name }}</td>
                        <td class="p-3 min-w-32">{{ $installation->email }}</td>
                        <td class="p-3 min-w-32">{{ $installation->phone }}</td>
                        <td class="p-3 min-w-32">{{ $installation->address }}</td>
                        <td class="p-3 min-w-32">{{ $installation->service->name }}</td>
                        <td class="p-3 min-w-32">{{ $installation->installation_date }}</td>
                        <td class="p-3 min-w-32">{{ $installation->hour }}</td>
                        <td class="p-3 min-w-32">{{ $installation->worker->user->name }}</td>
                        <td class="p-3 min-w-32">{{ $installation->observation }}</td>
                        <td class="p-3 min-w-32" >{{ $installation->code }}</td>
                        <td class="sticky min-w-16 bg-white text-start inset-0">
                            <div class="w-full h-full flex gap-2">
                                <button @click="showModalDelete=true; selectedId={{ $installation->id }}"
                                    class="rounded-full bg-secondary/20 p-2 w-8 h-8">
                                    <img src="{{ asset('img/icon/trash-icon.svg') }}" class="w-full h-full" alt="">
                                </button>
                                <a href="{{ route('edit-installation', ['id' => $installation->id]) }}"
                                    class="block w-8 h-8 rounded-full bg-secondary/20 p-2 aspect-square">
                                    <img src="{{ asset('img/icon/edit-icon.svg') }}" class="w-full h-full" alt="">
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <x-modal wire:model="showModalDelete" >
        <div class="p-8 flex flex-col gap-4">
            <p>¿Estás seguro de que deseas eliminar esta instalación?</p>
            <div class="flex justify-end gap-4">
                <x-button @click="showModalDelete = false">Cancelar</x-button>
                <x-danger-button wire:click="delete(selectedId)">Eliminar</x-danger-button>
            </div>
            @if ($message)
                <div>{{ $message }}</div>
            @endif
        </div>
    </x-modal>

</div>
