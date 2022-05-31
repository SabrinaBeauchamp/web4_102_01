{{$entreprise->nom}}
<br>
{{$categorie->nom}}
<br>
<a href="{{route('entreprises.edit', ['entreprise'=>$entreprise])}}">Modifier l'entreprise</a> <br>
<a href="{{route('entreprises.delete', ['entreprise'=>$entreprise])}}">Supprimer l'entreprise</a>