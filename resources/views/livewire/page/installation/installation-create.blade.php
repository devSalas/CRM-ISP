<div class="p-8 w-full">
    <h2 class="text-4xl mb-8">Crear Instalación</h2>
    <form wire:submit="save" class="grid grid-cols-3   gap-4 w-full ">

        <x-label>
            Nombre
            <x-input wire:model="InstallationCreate.name" class="w-full"></x-input>
            <x-input-error for="InstallationCreate.name" />
        </x-label>

        <x-label>
            Correo electronico
            <x-input wire:model="InstallationCreate.email" class="w-full"></x-input>
            <x-input-error for="InstallationCreate.email" />
        </x-label>

        <x-label>
            Telefono
            <x-input wire:model="InstallationCreate.phone" class="w-full"></x-input>
            <x-input-error for="InstallationCreate.phone" />
        </x-label>
        <x-label>
            Dirección
            <x-input wire:model="InstallationCreate.address" class="w-full"></x-input>
            <x-input-error for="InstallationCreate.address" />
        </x-label>

        <x-label>
            Servicio
           <select wire:model="InstallationCreate.service_id" name="" id="" class="w-full">
                @foreach ($services as $service )
                    <option value="{{$service->id}}"> {{$service->name}}</option>
                @endforeach
           </select>
            <x-input-error for="InstallationCreate.service_id" />
        </x-label>

        <x-label>
            Fecha de Instalación
            <x-input type="date" wire:model="InstallationCreate.installation_date"  class="w-full"></x-input>
            <x-input-error for="InstallationCreate.installation_date" />
        </x-label>

        <x-label>
            Hora
            <x-input type="time"  wire:model="InstallationCreate.hour" class="w-full"></x-input>
            <x-input-error for="InstallationCreate.hour" />
        </x-label>

        <x-label>
            Trabajador
            <select wire:model="InstallationCreate.worker_id" name="" id="" class="w-full">
                 @foreach ($workers as $worker )
                     <option value="{{$worker->id}}"> {{$worker->user->name}}</option>
                 @endforeach
            </select>
            <x-input-error for="InstallationCreate.worker_id" />
        </x-label>

        <x-label>
            Observación
            <x-input wire:model="InstallationCreate.observation" class="w-full"></x-input>
            <x-input-error for="InstallationCreate.observation" />
        </x-label>

        <x-label>
            código
            <x-input wire:model="InstallationCreate.code"  class="w-full"></x-input>
            <x-input-error for="InstallationCreate.code" />
        </x-label>

       

        <div class="w-full col-span-3  flex justify-end gap-4 ">
            <a href="{{ route('users')}}">
                <x-button  type="button">Cancelar </x-button>
            </a>
            <x-button>Crear </x-button>
        </div>
    </form>

</div>
