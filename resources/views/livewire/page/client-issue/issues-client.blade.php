<div x-data="{ showModalDelete: @entangle('showModalDelete') }" >

    <h1 class="mb-8 text-4xl">Averias</h1>

    <div class="flex justify-between w-full">
        <div></div>
        <x-button wire:click="resetFilter" class="py-3">Mostrar todos</x-button>
    </div>


    {{-- {{$clientIssues}} --}}

    <div class="w-full  relative overflow-x-scroll">
        <table class="table-auto  border-collapse  min-w-full">
            <thead class="pb-8 border-b-[1px] border-slate-800 ">
                <tr class="text-start ">
                    <th class="text-start p-2">codigo</th>
                    <th class="text-start p-2">descripción</th>
                    <th class="text-start p-2">trabajdor</th>
                    <th class="sticky  right-0 text-end p-2  left-0 top-0  bg-white  ">Acciones</th>

                </tr>
            </thead>
            <tbody class="relative">
                @foreach ($clientIssues as $clientIssue)
                    <tr class=" border-b-[1px] border-slate-600">
                        <td class="p-3 min-w-32">{{ $clientIssue->code }}</td>
                        <td class="p-3 min-w-32">{{ $clientIssue->description }}</td>
                        <td class="p-3 min-w-32">{{ $clientIssue->worker->user->name}}</td>
                        <td class="p-3 min-w-32">{{ $clientIssue->contract}}</td>
                        

                        <td class="sticky min-w-16 bg-white   text-start  inset-0 ">

                            <div class="w-full h-full  flex gap-2">
                                <button wire:click="openModalDelete({{ $clientIssue->id }})"
                                    class=" rounded-full bg-secondary/20 p-2 w-8 h-8 "
                                    @click="showModalDelete=true;id={{ $clientIssue->id }}">
                                    <img src="{{ asset('img/icon/trash-icon.svg') }}" class="w-full h-full"
                                        alt="">
                                </button>

                                <a href="{{ route('edit-installation', ['id' => $clientIssue->id]) }}"
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


    <div x-show="showModalDelete" @click.away="showModalDelete=false">
        hola
        <x-modal id={{ $id }}>
            <div class="p-8 flex flex-col gap-4">
                Estas seguro que desea eliminar el
                <div class="flex justify-end gap-4">
                    <x-button @click="showModalDelete=false">Cancelar</x-button>
                    <x-danger-button wire:click="delete">Eliminar</x-danger-button>
                </div>
                
            </div>
        </x-modal>
    </div>






</div>
