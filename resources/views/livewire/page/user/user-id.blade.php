<div>
   {{$id}}
   <h1>{{$user->name}}</h1>
   @if ($user->roles[0]->id == "1")
   <h2>Soy </h2>
   @endif
   <h2>{{$user->roles}}</h2>
</div>
