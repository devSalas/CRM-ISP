<div>
   <h1>Usuario</h1>
   {{$user->name}}

   @foreach ($userRoles as $role )
       {{$role}}
   @endforeach

   @role("admin")
   <div>Esto solo puede ver los admin</div>
   @endrole

</div>
