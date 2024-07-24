<div class="p-8">
    <h2 class="text-5xl mb-16">Actividades</h2>
    <div class="mb-8 flex gap-8">
        <a href="{{ route('create-installation') }}" class="">
            <x-button class="bg-secondary py-4 px-4 border-[0.5px] border-third text-txtsecondary  rounded-md">Crear
                Instalación</x-button>
        </a>
        <a href="{{ route('create-installation') }}" class="">
            <x-button class="bg-secondary py-4 px-4 border-[0.5px] border-third text-txtsecondary  rounded-md">Crear
                Avería</x-button>
        </a>
    </div>


    @livewire('page.installation.installations')

    @livewire('page.client-issue.issues-client')

</div>
