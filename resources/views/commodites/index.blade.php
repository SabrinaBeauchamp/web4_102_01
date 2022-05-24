@foreach($commodites as $commodite)
    <a href="{{route('commodites.show', ['commodite'=>$commodite])}}">{{$commodite['nom']}}</a> <br>
@endforeach
<a href="{{route('commodites.create')}}">Ajouter une commodite</a>