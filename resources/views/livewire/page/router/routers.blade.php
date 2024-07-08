<div x-data="{ open: false,openEditModal:$wire.openEditModal, openDeleteModal:false }" class="grow h-full  p-4">
    <div class="mb-8 flex justify-between">
        <h1 class=" text-4xl">Routers</h1>
        <div>
            <button @click="open=true" class="bg-secondary text-txtsecondary px-4 py-2 rounded-xl ">
                Crear Router
            </button>
            <div x-show="open">
                @livewire('page.router.create-router')
            </div>

        </div>

    </div>
    {{-- show modal --}}
    {{-- show edit  modal --}}
    <div x-show="openEditModal">
        @livewire('page.router.edit-router')
    </div>


    <div>
        <table class="table-fixed w-full border-collapse  ">
            <thead class="pb-8 border-b-[1px] border-slate-800 ">
                <tr class="text-start   ">
                    <th class="text-start p-2">Nombre</th>
                    <th class="text-start p-2">Descripción</th>
                    <th class="text-start p-2">Modelo</th>
                    <th class="text-start p-2">Puertos</th>
                    <th class="text-start p-2">Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($routers as $router)
                    <tr class="pb-8 border-b-[1px] border-slate-600 " key="router-{{$router->id}}">
                        <td class="p-3">{{ $router->name }}</td>
                        <td class="p-3">{{ $router->description }}</td>
                        <td class="p-3">{{ $router->model }}</td>
                        <td class="p-3">{{ $router->ports }}</td>
                        <td class="">
                            <button class="rounded-full bg-secondary/20 p-2">
                                <img src="{{ asset('img/icon/trash-icon.svg') }}" class="w-4 h-4" alt="">
                            </button>
                            <button class="rounded-full bg-secondary/20 p-2">
                                <img  wire:click="$dispatch('routerEdit', { id: {{ $router->id }} })" src="{{ asset('img/icon/edit-icon.svg') }}" class="w-4 h-4" alt="">
                            </button>

                        </td>
                    </tr>
                @endforeach



            </tbody>
        </table>

    </div>
</div>
