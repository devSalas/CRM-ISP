<div class="fixed inset-0  bg-slate-500/60 flex justify-center items-center" >
    <div class="w-full max-w-xl min-h-96 bg-primary rounded-xl p-4">
        <h2 class="text-4xl">Editar Router</h2>
        
        <form wire:submit="save"  class="py-6" @click.away="open = false; $dispatch('reset-form')">
            <div class="flex flex-col gap-2">
                <x-label> Nombre</x-label>
                <x-input wire:model="RouterCreate.name" class="w-full" placeholder="Dixon..." ></x-input>
                <x-input-error for="RouterCreate.name"/>
            </div>
            <div class="flex flex-col gap-2">
                <x-label>Descripción</x-label>
                <x-input  wire:model="RouterCreate.description" class="w-full" placeholder="Este router es doble banda.."></x-input>
                <x-input-error for="RouterCreate.model"/>
            </div>
            <div class="flex flex-col gap-2">
                <x-label>modelo</x-label>
                <x-input  wire:model="RouterCreate.model" class="w-full" placeholder="Modelo x6twe.."></x-input>
                <x-input-error for="RouterCreate.model"/>
            </div>
            <div class="flex flex-col gap-2">
                <x-label>puertos</x-label>
                <x-input  wire:model="RouterCreate.ports" class="w-full" placeholder="4"></x-input>
                <x-input-error for="RouterCreate.ports"/>
            </div>

            <div class="py-6 flex gap-4">
                <button type="button" @click="openEditModal=false"
                    class="px-6 py-2 rounded-md border-2 hover:scale-105 transition-transform duration-100 ">cancelar</button>
                <button type="submit"
                    class="px-6 py-2 rounded-md bg-secondary text-txtsecondary hover:scale-105 transition-transform duration-100">crear</button>
            </div>
        </form>
    </div>
</div>