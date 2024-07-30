<div x-data="{ showModalDelete: @entangle('showModalDelete') }" class="  gap-8   p-8">

    <h1 class="mb-8 text-4xl">Clientes</h1>
{{--     <div class="mb-8">
        <a href="{{ route('create-worker') }}" class="block">
            <x-button class="bg-secondary py-4 px-4 border-[0.5px] border-third text-txtsecondary  rounded-md">Crear
                Cliente</x-button>
        </a>
    </div> --}}
{{--     <div class="flex justify-between w-full">
        <form wire:submit.prevent="filterInstallations">
            <label for="filterDate">Filtrar por fecha:</label>
            <input type="date" id="filterDate" wire:model="filterDate">
            <x-button type="submit">Filter</x-button>
        </form>
        <x-button wire:click="resetFilter">Mostrar todos</x-button>
    </div> --}}




    <div class="w-full max-w-7xl  relative overflow-x-auto">
        <table class="table-auto  border-collapse  min-w-full">
            <thead class="pb-8 border-b-[1px] border-slate-800 ">
                <tr class="text-start bg-slate-300 rounded-2xl">
                    <th class="text-start p-2">id</th>
                    <th class="text-start p-2">Nombre</th>
                    <th class="text-start p-2">Correo</th>


                   {{--  <th class="sticky  right-0 text- start p-2  left-0 top-0  bg-white  ">Acciones</th>
 --}}
                </tr>
            </thead>
            <tbody class="relative">
                @foreach ($clients as $client)
                    <tr class=" border-b-[1px] border-slate-300">
                        <td class="p-3 min-w-32">{{ $client->id}}</td>
                        <td class="p-3 min-w-32">{{ $client->user->name }}</td>
                        <td class="p-3 min-w-32">{{ $client->user->email }}</td>
                       

                       {{--  <td class="sticky min-w-16 bg-white   text-start  inset-0 ">

                            <div class="w-full h-full  flex gap-2">
                                <button wire:click="openModalDelete({{ $worker->id }})"
                                    class=" rounded-full bg-secondary/20 p-2 w-8 h-8 "
                                    @click="showModalDelete=true;id={{ $worker->id }}">
                                    <img src="{{ asset('img/icon/trash-icon.svg') }}" class="w-full h-full"
                                        alt="">
                                </button>

                                <a href="{{ route('edit-installation', ['id' => $worker->id]) }}"
                                    class="block w-8 h-8 rounded-full bg-secondary/20 p-2 aspect-square">
                                    <img src="{{ asset('img/icon/edit-icon.svg') }}" class="w-full h-full" alt>
                                </a>
                            </div>

                        </td> --}}

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

{{-- 
    <div x-show="showModalDelete" @click.away="showModalDelete=false">
        hola
        <x-modal id={{ $id }}>
            <div class="p-8 flex flex-col gap-4">
                Estas seguro que desea eliminar el
                <div class="flex justify-end gap-4">
                    <x-button @click="showModalDelete=false">Cancelar</x-button>
                    <x-danger-button wire:click="delete">Eliminar</x-danger-button>
                </div>
                @if ($message)
                    <div>{{ $message }}</div>
                @endif
            </div>
        </x-modal>
    </div>
 --}}





</div>
