<div class="h-screen w-screen overflow-hidden gap-8  flex bg-primary p-8">
    <div class="">
        <x-navbar />
    </div>
    <div class="grow">
        <h1 class="mb-8 text-4xl">Usuarios</h1>
    <div class="mb-8">
        <button class="bg-secondary py-2 px-4 border-[0.5px] border-third/20 text-txtprimary rounded-md">
            Crear Usuario
        </button>
    </div>
    <div>
        <table class="table-fixed w-full border-collapse  ">
            <thead class="pb-8 border-b-[1px] border-slate-800 ">
                <tr class="text-start text-txtsecondary  ">
                    <th class="text-start p-2">Nombre</th>
                    <th class="text-start p-2">Correo</th>
                    <th class="text-start p-2">Telefono</th>
                    <th class="text-start p-2">genero</th>
                    <th class="text-start p-2">edad</th>
                    <th class="text-start p-2">DNI</th>
                    <th class="text-start p-2">CE</th>
                    <th class="text-start p-2">Zona</th>
                    <th class="text-start p-2">Distrito</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)

                <tr class="pb-8 border-b-[1px] border-slate-600 ">
                    <td class="p-3">{{$user->name}}</td>
                    <td class="p-3">{{$user->email}}</td>
                    <td class="p-3">{{$user->phone}}</td>
                    <td class="p-3">{{$user->age}} años</td>
                    <td class="p-3">{{$user->address}}</td>
                    <td class="p-3">{{$user->DNI}}</td>
                    <td class="p-3">{{$user->CE}}</td>
                    <td class="p-3">{{$user->zone}}</td>
                    <td class="p-3">{{$user->district}}</td>
                   
                    
                  
                </tr>
                @endforeach



            </tbody>
        </table>

    </div>
    </div>
</div>
