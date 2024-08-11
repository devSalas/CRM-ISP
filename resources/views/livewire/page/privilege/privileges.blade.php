<div class="max-w-7xl m-auto p-8">
    <form>
        <div class="grid grid-cols-2 gap-4">
            <div class="grid grid-cols-3 col-span-3">
                <div>
                    Roles
                    @foreach ($roles as $rol)
                        <x-label class="p-2">
                            <input type="checkbox" value="{{ $rol->id }}" 
                                   wire:model="PrivilegeEdit.roles" 
                                   @if(in_array($rol->id, $PrivilegeEdit->roles)) checked @endif>
                            {{ $rol->name }}
                        </x-label>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="py-3 w-full flex justify-end gap-4">
            <x-button>Cancelar</x-button>
            <x-button wire:click="save">Guardar</x-button>
        </div>
    </form>
</div>
