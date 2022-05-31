{{$categorie->nom}}
<br>({{$groupe->nom}})
@include('entreprises.liste', ['entreprises'=>$categorie->entreprises])
<a href="{{route('categories.edit', ['categorie'=>$categorie])}}">Modifier la catégorie</a> <br>
<a href="{{route('categories.delete', ['categorie'=>$categorie])}}">Supprimer la catégorie</a>