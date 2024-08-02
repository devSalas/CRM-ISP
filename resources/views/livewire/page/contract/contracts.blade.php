<div x-data="{ showModalDelete: @entangle('showModalDelete') }"
class="  gap-8   p-8">

    <h1 class="mb-8 text-4xl">Contrato</h1>
    <div class="mb-8">
        <a href="{{ route('contract-create') }}"
            class="bg-secondary py-2 px-4 border-[0.5px] border-third text-txtsecondary  rounded-md">
            Crear Contrato
        </a>
    </div>
    {{-- este  --}}
    <div class="w-full overflow-auto relative">

        <table class="table-auto  border-collapse  min-w-full   ">
            <thead class="pb-8  bg-slate-300 ">
                <tr class="text-start ">
                    <th class="text-start p-2">cliente</th>
                    <th class="text-start p-2">N* contrato</th>
                    <th class="text-start p-2">Instalador</th>
                    <th class="text-start p-2">Es Compañia</th>
                    <th class="text-start p-2">compañia</th>
                    <th class="text-start p-2">estado</th>
                    <th class="text-start p-2">servicio</th>
                    <th class="text-start p-2">Caja Nat</th>
                    <th class="text-start p-2">puerto de caja Nat</th>
                    <th class="text-start p-2">Router</th>
                    <th class="text-start p-2">SN</th>
                    <th class="text-start p-2">compromiso de pago</th>
                    <th class="text-start p-2">Fecha de contratación</th>
                    <th class="text-start p-2">Fecha de cancelación</th>
                    <th class="sticky  right-0 text-start px-4  left-0 top-0   bg-slate-300 ">Acciones</th>

                </tr>
            </thead>
            <tbody class="">
                @foreach ($contracts as $contract)
                <tr class=" border-b-[1px] border-slate-300 ">
                        <td class="p-3 min-w-64">{{ $contract->client->user->name }}</td>
                        <td class="p-3 min-w-32">{{ $contract->code }}</td>
                        <td class="p-3 min-w-32">{{ $contract->worker->user->name }}</td>
                        <td class="p-3 min-w-32">
                            {{ $contract->finish_date == 1 ? 'Sí' : 'No' }}
                        </td>
                        <td class="p-3 min-w-32">
                            @if ($contract->company)
                            {{$contract->finish_date}}
                            @endif no definido
                        </td>
                        <td class="p-3 min-w-32">
                            {{ $contract->state == 1 ? 'Activo' : 'desactivado' }}
                        </td>
                        <td class="p-3 min-w-32">{{ $contract->service->name }}</td>
                        <td class="p-3 min-w-32">{{ $contract->boxNat->name}}</td>
                        <td class="p-3 min-w-32">{{ $contract->port_box_nat}}</td>
                        <td class="p-3 min-w-32">{{ $contract->router->name}}</td>
                        <td class="p-3 min-w-32">{{ $contract->SN }}</td>
                        <td class="p-3 min-w-32">{{ $contract->paymentCommitment->start_date}} - {{ $contract->paymentCommitment->end_date}}</td>
                        <td class="p-3 min-w-32">{{ $contract->hire_date}}</td>
                        <td class="p-3 min-w-32">
                            @if ($contract->finish_date)
                            {{$contract->finish_date}}
                            @endif no definido
                        </td>
                        <td class="sticky min-w-16 bg-white   text-start  inset-0 ">

                            <div class="w-full h-full  flex gap-2">
                                <button wire:click="openModalDelete({{ $contract->id }})"
                                    class=" rounded-full bg-secondary/20 p-2 w-8 h-8 "
                                    @click="showModalDelete=true;id={{ $contract->id }}">
                                    <img src="{{ asset('img/icon/trash-icon.svg') }}" class="w-full h-full"
                                        alt="">
                                </button>

                                <a href="{{ route('contract-edit', ['id' => $contract->id]) }}"
                                    class="block w-8 h-8 rounded-full bg-secondary/20 p-2 aspect-square">
                                    <img src="{{ asset('img/icon/edit-icon.svg') }}" class="w-full h-full" alt>
                                </a>
                            </div>

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
