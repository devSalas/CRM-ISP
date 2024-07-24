{{-- resources/views/your-view.blade.php --}}
<x-table-page
    :title="'Servicios'"
    :createRoute="route('create-service')"
    :createButtonText="'Crear Servicio'"
    :headers="['Nombre', 'Descripción', 'Precio', 'TVs', 'Velocidad']"
    :columns="['name', 'description', 'price', 'tvs', 'speed']"
    :items="$services"
    :id="$id"
    :routeEdit="'edit-service'"
/>
