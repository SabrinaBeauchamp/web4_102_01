@foreach($commodites as $commodite)
    <p>{{$commodite['nom']}}</p>
@endforeach
<a href="{{route('commodites.create')}}">Ajouter une commodite</a>