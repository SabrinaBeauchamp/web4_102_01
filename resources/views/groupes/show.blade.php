<a href="{{route('groupes.show', ['groupe'=>$groupe])}}">{{$groupe['nom']}}</a>
@include("categories.liste", ['categories'=>$groupe->categories])
<a href="{{route('groupes.edit', ['groupe'=>$groupe])}}">Modifier le groupe</a> <br>
<a href="{{route('groupes.delete', ['groupe'=>$groupe])}}">Supprimer le groupe</a>