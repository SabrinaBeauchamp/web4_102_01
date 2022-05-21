{{$commodite->nom}}
<br>
({{$groupe->nom}})
<br>
<a href="{{route('commodites.edit', ['commodite'=>$commodite])}}">Modifier la commodite</a>
<a href="{{route('commodites.delete', ['commodite'=>$commodite])}}">Suprimmer la commodite</a>