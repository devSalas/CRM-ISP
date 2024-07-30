
<div x-data="{ showModalDelete: @entangle('showModalDelete') }" class="w-full overflow-hidden gap-8 p-8">
    <h1 class="mb-8 text-4xl">{{ $title }}</h1>
    <div class="mb-8">
        <a href="{{ $createRoute }}"
            class="bg-secondary py-2 px-4 border-[0.5px] border-third text-txtsecondary rounded-md">
            {{ $createButtonText }}
        </a>
    </div>
    <div class="max-w-7xl w-full overflow-auto relative">
        <table class="table-auto border-collapse min-w-full">
            <thead class="pb-8  bg-fourth">
                <tr class="text-start">
                    @foreach ($headers as $header)
                        <th class="text-start p-2">{{ $header }}</th>
                    @endforeach
                    <th class="text-start p-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr class="border-b-[1px] border-fourth">
                        @foreach ($columns as $column)
                            <td class="p-3 min-w-32">{{ $item[$column] }}</td>
                        @endforeach
                        <td class="sticky min-w-16 bg-white   text-start  inset-0 ">
                            <div class="w-full h-full  flex  gap-2">
                                <button @click="showModalDelete=true; id={{ $item['id'] }}"
                                    wire:click="openModalDelete({{ $item['id'] }})"
                                    class="rounded-full bg-secondary/20 p-2">
                                    <img src="{{ asset('img/icon/trash-icon.svg') }}" class="w-4 h-4" alt="">
                                </button>
                                <a href="{{ route($routeEdit, ['id' => $item['id']]) }}"
                                    class="inline-block rounded-full bg-secondary/20 p-2">
                                    <img src="{{ asset('img/icon/edit-icon.svg') }}" class="w-4 h-4" alt="">
                                </a>

                                <a href="{{ route('users-id', ['id' => $item['id']]) }}"
                                    class="inline-block rounded-full bg-secondary/20 p-2">
                                    <img src="{{ asset('img/icon/edit-icon.svg') }}" class="w-4 h-4" alt="">
                                </a>

                            </div>
                        </td>
                        {{-- <td class="sticky min-w-16 bg-white   text-start  inset-0 ">

                            <div class="w-full h-full  flex gap-2">
                                <button wire:click="openModalDelete({{ $installation->id }})"
                                    class=" rounded-full bg-secondary/20 p-2 w-8 h-8 "
                                    @click="showModalDelete=true;id={{ $installation->id }}">
                                    <img src="{{ asset('img/icon/trash-icon.svg') }}" class="w-full h-full"
                                        alt="">
                                </button>

                                <a href="{{ route('edit-installation', ['id' => $installation->id]) }}"
                                    class="block w-8 h-8 rounded-full bg-secondary/20 p-2 aspect-square">
                                    <img src="{{ asset('img/icon/edit-icon.svg') }}" class="w-full h-full" alt>
                                </a>
                            </div>

                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{--  @if (isset($id) && $id) --}}
        <div x-show="showModalDelete" @click.away="showModalDelete=false">
            <x-modal :id="$id">
                <div class="p-8 flex flex-col gap-4">
                    Estas seguro que desea eliminar el
                    <div class="flex justify-end gap-4">
                        <x-button @click="showModalDelete=false">Cancelar</x-button>
                        <x-danger-button wire:click="delete">Eliminar</x-danger-button>
                    </div>
                    {{-- @if ($message)
                            <div>{{ $message }}</div>
                        @endif --}}
                </div>
            </x-modal>
        </div>
        {{-- @endif --}}
    </div>
</div>
