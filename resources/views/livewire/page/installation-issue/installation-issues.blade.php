<div x-data="{ showModalDelete: @entangle('showModalDelete') }" class="mb-16">

   <h1 class="mb-8 text-4xl">Averia</h1>

   <div class="flex justify-between w-full mb-8">
       <div >
           <label for="filterDate">Filtrar por fecha:</label>
           <input type="date" id="filterDate" wire:model.live="filterDate">
       </div>
       <x-button wire:click="resetFilter">Mostrar todos</x-button>
   </div>




   <div class="w-full  relative overflow-x-auto">
       <table class="table-auto  border-collapse  min-w-full">
           <thead class="pb-8 border-b-[1px] bg-fourth ">
               <tr class="text-start ">
                   <th class="text-start p-2">Codigo</th>
                   <th class="text-start p-2">Cliente</th>
                   <th class="text-start p-2">Trabajador</th>
                   <th class="text-start p-2">Dirección</th>
                   <th class="text-start p-2">Telefono</th>
                   <th class="text-start p-2">Hora</th>
                   <th class="sticky  right-0 text-start p-2  left-0 top-0  bg-fourth  ">Acciones</th>

               </tr>
           </thead>
           <tbody class="relative">
              @foreach ($issues as $issue)
           
                   <tr class=" border-b-[1px] border-fourth">
                        <td class="p-3 min-w-32">{{ $issue->code }}</td>
                       <td class="p-3 min-w-32">{{ $issue->Contract->client->user->name }}</td>
                       <td class="p-3 min-w-32">{{ $issue->worker->user->name }}</td>
                       <td class="p-3 min-w-32">{{ $issue->Contract->address}} - {{ $issue->Contract->zone}} - {{ $issue->Contract->district}}</td>
                       <td class="p-3 min-w-32">{{$issue->Contract->client->user->phone}}</td>
                       <td class="p-3 min-w-32">9:00 am</td> 
                      
                       {{--<td class="p-3 min-w-32">{{ $issue->hour }}</td>
                       <td class="p-3 min-w-32">{{ $issue->worker->user->name }}</td>
                       <td class="p-3 min-w-32">{{ $issue->observation }}</td>
                       <td class="p-3 min-w-32">{{ $issue->code }}</td> --}}

                       <td class="sticky min-w-16 bg-white   text-start  inset-0 ">

                           <div class="w-full h-full  flex gap-2">
                               <button wire:click="openModalDelete({{ $issue->id }})"
                                   class=" rounded-full bg-secondary/20 p-2 w-8 h-8 "
                                   @click="showModalDelete=true;id={{ $issue->id }}">
                                   <img src="{{ asset('img/icon/trash-icon.svg') }}" class="w-full h-full"
                                       alt="">
                               </button>

                               <a href="{{ route('edit-installation', ['id' => $issue->id]) }}"
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
