<div class="grow  gap-8  flex flex-col p-8">

    <h1 class="text-4xl mb-8">Dashboard</h1>
    <div class="max-w-full">
        <div class="flex gap-8 min-w-56 overflow-x-auto flex-nowrap  h-32 w-full px-8 mb-8 ">
            <div
                class="grow border-2 w-[300px] border-secondary   rounded-lg flex justify-center items-center text-4xl px-4">
                {{ $users }} Usuarios
            </div>
            <div
                class="grow border-2 w-auto border-secondary   rounded-lg flex justify-center items-center text-4xl px-4">
                {{ $workers }} Trabajadores
            </div>
            <div
                class="grow border-2 w-[300px] border-secondary   rounded-lg flex justify-center items-center text-4xl px-4">
                {{ $clients }} clientes
            </div>
            <div
                class="grow border-2 w-[300px] border-secondary   rounded-lg flex justify-center items-center text-4xl px-4">
                {{ $routers }} routers
            </div>
        </div>
    </div>

    <h2 class="text-2xl mb-8">Instalaciones Pendientes Hoy</h2>
    <div class="px-8">


        <table class="table-auto  border-collapse  min-w-full">
            <thead class="pb-8 border-b-[1px] border-slate-800 ">
                <tr class="text-start ">
                    <th class="text-start p-2">Nombre</th>
                    <th class="text-start p-2">Telefono</th>
                    <th class="text-start p-2">Dirección</th>
                    <th class="text-start p-2">Servicio</th>
                    <th class="text-start p-2">Hora</th>
                    <th class="text-start p-2">Codigo</th>

                </tr>
            </thead>
            <tbody class="relative">
                @foreach ($installationsForToday as $installation)
                    <tr class=" border-b-[1px] border-slate-600">
                        <td class="p-3 min-w-32">{{ $installation->name }}</td>
                        <td class="p-3 min-w-32">{{ $installation->phone }}</td>
                        <td class="p-3 min-w-32">{{ $installation->address }}</td>
                        <td class="p-3 min-w-32">{{ $installation->service->name }}</td>
                        <td class="p-3 min-w-32">{{ $installation->hour }}</td>
                        <td class="p-3 min-w-32">{{ $installation->code }}</td>


                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>




</div>
