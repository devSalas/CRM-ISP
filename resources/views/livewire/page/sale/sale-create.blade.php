<div class="p-8 w-full">
    <h2 class="text-4xl mb-8">Crear Venta</h2>
    <form wire:submit="save" class="grid grid-cols-3   gap-4 w-full ">

        <x-label>
            Nombre
            <x-input wire:model="SaleCreate.name" class="w-full" placeholder="Esteban Salas.." ></x-input>
            <x-input-error for="SaleCreate.name" />
        </x-label>

        <x-label>
            Correo electronico
            <x-input wire:model="SaleCreate.email" class="w-full"  placeholder="esalassulca@gmail.com.."></x-input>
            <x-input-error for="SaleCreate.email" />
        </x-label>

        <x-label>
            Telefono
            <x-input wire:model="SaleCreate.phone" class="w-full"  placeholder="927859435"></x-input>
            <x-input-error for="SaleCreate.phone" />
        </x-label>

        <x-label>
            DNI
            <x-input wire:model="SaleCreate.DNI" class="w-full"  placeholder="4343433"></x-input>
            <x-input-error for="SaleCreate.DNI" />
        </x-label>

        <x-label>
            CE
            <x-input wire:model="SaleCreate.CE" class="w-full"  placeholder="00235343"></x-input>
            <x-input-error for="SaleCreate.CE" />
        </x-label>

        <x-label>
            Dirección
            <x-input wire:model="SaleCreate.address" class="w-full"  placeholder="San Juan de miraflores"></x-input>
            <x-input-error for="SaleCreate.address" />
        </x-label>

        <x-label>
            Asesor
                <select wire:model="SaleCreate.user_id" name="" id="" class="w-full">
                    <option value="">Selecciónar asesor</option>
                     @foreach ($users as $user )
                         <option value="{{$user->id}}"> {{$user->name}}</option>
                     @endforeach
                </select>
                 <x-input-error for="SaleCreate.user_id" />
        </x-label>

        <x-label>
            Observación
            <x-input wire:model="SaleCreate.observation" class="w-full"></x-input>
            <x-input-error for="SaleCreate.observation" />
        </x-label>

        <x-label>
            Descripción
            <x-input wire:model="SaleCreate.description" class="w-full"></x-input>
            <x-input-error for="SaleCreate.description" />
        </x-label>

        <x-label>
            Servicio
            <select wire:model="SaleCreate.service_id" name="" id="" class="w-full">
                <option value="">seleccioar servicio</option>
                 @foreach ($services as $service )
                     <option value="{{$service->id}}"> {{$service->name}}</option>
                 @endforeach
            </select>
             <x-input-error for="SaleCreate.service_id" />
        </x-label>



        <div></div>

        <div class="w-full col-span-3  flex justify-end gap-4 ">
            <a href="{{ route('users') }}">
                <x-button type="button">Cancelar </x-button>
            </a>
            <x-button>Crear </x-button>
        </div>

        
    </form>

</div>
