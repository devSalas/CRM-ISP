<div x-data="{ showModalDelete: @entangle('showModalDelete'), selectedId: null }"class="mb-16">

    <h1 class="mb-8 text-4xl">Ventas</h1>
    <div class="mb-8">
        <a href="{{ route('sale-create') }}"
            class="bg-secondary py-2 px-4 border-[0.5px] border-third text-txtsecondary  rounded-md">
            Crear venta
        </a>
    </div>
    <div class="flex justify-between w-full mb-8">
        <div >
            <label for="filterDate">Filtrar por fecha:</label>
            <input type="date" id="filterDate" wire:model.live="filterDate">
        </div>
        <x-button wire:click="resetFilter">Mostrar todos</x-button>
    </div>

    <div class="w-full  relative overflow-x-auto">
        <table class="table-auto  border-collapse  min-w-full">
            <thead class="pb-8 bg-slate-300 ">
                <tr class="text-start ">
                    <th class="text-start p-2">Nombre</th>
                    <th class="text-start p-2">Correo</th>
                    <th class="text-start p-2">Telefono</th>
                    <th class="text-start p-2">DNI</th>
                    <th class="text-start p-2">CE</th>
                    <th class="text-start p-2">Dirección</th>
                    <th class="text-start p-2">Asesor</th>
                    <th class="text-start p-2">Observación</th>
                    <th class="text-start p-2">Descripción</th>
                    <th class="text-start p-2">Servicio</th>
                    <th class="text-start p-2">Usuario</th>
                    <th class="sticky  right-0 text-start p-2  left-0 top-0  bg-slate-300  ">Acciones</th>

                </tr>
            </thead>
            <tbody class="relative">
                @foreach ($sales as $sale)
                    <tr class=" border-b-[1px] border-slate-300">
                        <td class="p-3 min-w-32">{{ $sale->name }}</td>
                        <td class="p-3 min-w-32">{{ $sale->email }}</td>
                        <td class="p-3 min-w-32">{{ $sale->phone }}</td>
                        <td class="p-3 min-w-32">{{ $sale->address }}</td>
                        <td class="p-3 min-w-32">{{ $sale->DNI }}</td>
                        <td class="p-3 min-w-32">{{ $sale->CE }}</td>
                        <td class="p-3 min-w-32">{{ $sale->adviser }}</td>
                        <td class="p-3 min-w-32">{{ $sale->observation }}</td>
                        <td class="p-3 min-w-32">{{ $sale->description }}</td>
                        <td class="p-3 min-w-32">{{$sale->update_at}}</td>
                        <td class="p-3 min-w-32">id de usuario</td>
                        <td class="sticky min-w-16 bg-white   text-start  inset-0 ">

                            <div class="w-full h-full  flex gap-2">
                                <button 
                                    class=" rounded-full bg-secondary/20 p-2 w-8 h-8 "
                                    @click="showModalDelete=true;selectedId={{ $sale->id }}">
                                    <img src="{{ asset('img/icon/trash-icon.svg') }}" class="w-full h-full"
                                        alt="">
                                </button>

                                <a href="{{ route('sale-edit', ['id' => $sale->id]) }}"
                                    class="block w-8 h-8 rounded-full bg-secondary/20 p-2 aspect-square">
                                    <img src="{{ asset('img/icon/edit-icon.svg') }}" class="w-full h-full" alt>
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
