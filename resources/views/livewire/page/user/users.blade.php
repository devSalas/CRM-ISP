<div x-data="{ showModalDelete: @entangle('showModalDelete') }"
class="  gap-8   p-8">

    <h1 class="mb-8 text-4xl">Usuarios</h1>
    <div class="mb-8">
        <a href="{{ route('create-user') }}"
            class="bg-secondary py-2 px-4 border-[0.5px] border-third text-txtsecondary  rounded-md">
            Crear Usuario
        </a>
    </div>
    {{-- este  --}}
    <div class="w-full overflow-auto relative">

        <table class="table-auto  border-collapse  min-w-full   ">
            <thead class="pb-8 border-b-[1px] border-slate-800 ">
                <tr class="text-start ">
                    <th class="text-start p-2">Nombre</th>
                    <th class="text-start p-2">Correo</th>
                    <th class="text-start p-2">Telefono</th>
                    <th class="text-start p-2">genero</th>
                    <th class="text-start p-2">edad</th>
                    <th class="text-start p-2">Dirección</th>
                    <th class="text-start p-2">DNI</th>
                    <th class="text-start p-2">CE</th>
                    <th class="text-start p-2">Zona</th>
                    <th class="text-start p-2">Distrito</th>
                    <th class="sticky  right-0 text-start p-2  left-0 top-0    ">Acciones</th>

                </tr>
            </thead>
            <tbody class="">
                @foreach ($users as $user)
                    <tr class=" border-b-[1px] border-slate-600 ">
                        <td class="p-3 min-w-32">{{ $user->name }}</td>
                        <td class="p-3 min-w-32">{{ $user->email }}</td>
                        <td class="p-3 min-w-32">{{ $user->phone }}</td>
                        <td class="p-3 min-w-32">{{ $user->gender }}</td>
                        <td class="p-3 min-w-32">{{ $user->age }} años</td>
                        <td class="p-3 min-w-32">{{ $user->address }}</td>
                        <td class="p-3 min-w-32">{{ $user->DNI }}</td>
                        <td class="p-3 min-w-32">{{ $user->CE }}</td>
                        <td class="p-3 min-w-32">{{ $user->zone }}</td>
                        <td class="p-3 min-w-32">{{ $user->district }}</td>
                        <td class="sticky  bg-primary text-start  inset-0 h-full w-full">
                            <span class=" w-full h-full  flex justify-center items-center gap-2">
                                <button @click="showModalDelete=true;id={{ $user->id }}"
                                    wire:click="openModalDelete({{ $user->id }})"
                                    class="rounded-full bg-secondary/20 p-2">
                                    <img src="{{ asset('img/icon/trash-icon.svg') }}" class="w-4 h-4" alt="">
                                </button>
                                <a href="{{ route('edit-user',[ 'id'=>$user->id]) }}"  class="inline-block rounded-full bg-secondary/20 p-2">
                                    <img src="{{ asset('img/icon/edit-icon.svg') }}" class="w-4 h-4" alt="">
                                </a>
                                <a href="{{ route('users-id',[ 'id'=>$user->id]) }}"  class="inline-block rounded-full bg-secondary/20 p-2">
                                    <img src="{{ asset('img/icon/edit-icon.svg') }}" class="w-4 h-4" alt="">
                                </a>
                            </span>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

{{-- 
        <div x-show="showModalDelete"  @click.away="showModalDelete=false">
            hola
            <x-modal id={{$id}}>
                <div class="p-8 flex flex-col gap-4">
                    Estas seguro que desea eliminar el
                    <div class="flex justify-end gap-4">
                        <x-button @click="showModalDelete=false">Cancelar</x-button>
                        <x-danger-button wire:click="delete">Eliminar</x-danger-button>
                    </div>
                    @if ($message)
                        <div>{{$message}}</div>
                    @endif
                </div>
            </x-modal>
        </div> --}}


    </div>




</div>
