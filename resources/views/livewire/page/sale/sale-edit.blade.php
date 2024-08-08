<div class="p-8 w-full">
    <h2 class="text-4xl mb-8">Crear Venta</h2>
    <form wire:submit="save" class="grid grid-cols-3   gap-4 w-full ">

        <x-label>
            Nombre
            <x-input wire:model="SaleEdit.name" class="w-full" placeholder="Esteban Salas.." ></x-input>
            <x-input-error for="SaleEdit.name" />
        </x-label>

        <x-label>
            Correo electronico
            <x-input wire:model="SaleEdit.email" class="w-full"  placeholder="esalassulca@gmail.com.."></x-input>
            <x-input-error for="SaleEdit.email" />
        </x-label>

        <x-label>
            Telefono
            <x-input wire:model="SaleEdit.phone" class="w-full"  placeholder="927859435"></x-input>
            <x-input-error for="SaleEdit.phone" />
        </x-label>

        <x-label>
            DNI
            <x-input wire:model="SaleEdit.DNI" class="w-full"  placeholder="4343433"></x-input>
            <x-input-error for="SaleEdit.DNI" />
        </x-label>

        <x-label>
            CE
            <x-input wire:model="SaleEdit.CE" class="w-full"  placeholder="00235343"></x-input>
            <x-input-error for="SaleEdit.CE" />
        </x-label>

        <x-label>
            Dirección
            <x-input wire:model="SaleEdit.address" class="w-full"  placeholder="San Juan de miraflores"></x-input>
            <x-input-error for="SaleEdit.address" />
        </x-label>

        <x-label>
            Asesor
                <select wire:model="SaleEdit.user_id" name="" id="" class="w-full">
                    <option value="">Selecciónar asesor</option>
                     @foreach ($users as $user )
                         <option value="{{$user->id}}"> {{$user->name}}</option>
                     @endforeach
                </select>
                 <x-input-error for="SaleEdit.user_id" />
        </x-label>

        <x-label>
            Observación
            <x-input wire:model="SaleEdit.observation" class="w-full"></x-input>
            <x-input-error for="SaleEdit.observation" />
        </x-label>

        <x-label>
            Descripción
            <x-input wire:model="SaleEdit.description" class="w-full"></x-input>
            <x-input-error for="SaleEdit.description" />
        </x-label>

        <x-label>
            Servicio
            <select wire:model="SaleEdit.service_id" name="" id="" class="w-full">
                <option value="">seleccioar servicio</option>
                 @foreach ($services as $service )
                     <option value="{{$service->id}}"> {{$service->name}}</option>
                 @endforeach
            </select>
             <x-input-error for="SaleEdit.service_id" />
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
