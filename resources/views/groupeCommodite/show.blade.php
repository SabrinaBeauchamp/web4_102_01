<h1>{{$groupeCommodite->nom}}</h1>
@foreach($commodites as $commodite)
    <a href="{{route('commodites.show',['commodite' => $commodite] )}}">
        {{$commodite->nom}} <br>
    </a>
@endforeach
<a href="{{route('groupesCommodite.edit', ['groupeCommodite'=>$groupeCommodite])}}">Modifier</a>
<a href="{{route('groupesCommodite.delete', ['groupeCommodite'=>$groupeCommodite])}}">Supprimer</a>