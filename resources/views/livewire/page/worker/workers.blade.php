<div x-data="{ showModalDelete: @entangle('showModalDelete') }" class="  gap-8   p-8">

    <h1 class="mb-8 text-4xl">Trabajadores</h1>


    <div class="w-full max-w-7xl relative overflow-x-auto">
        <table class="table-auto  border-collapse  min-w-full">
            <thead class="pb-8 border-b-[1px]">
                <tr class="text-start bg-slate-300 ">
                    <th class="text-start p-2">id</th>
                    <th class="text-start p-2">Nombre</th>
                    <th class="text-start p-2">Correo</th>
                </tr>
            </thead>
            <tbody class=" relative">
                @foreach ($workers as $worker)
                    <tr class=" border-b-[1px] border-slate-300">
                        <td class="p-3 min-w-32">{{ $worker->id}}</td>
                        <td class="p-3 min-w-32">{{ $worker->user->name }}</td>
                        <td class="p-3 min-w-32">{{ $worker->user->email }}</td>
                       

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
