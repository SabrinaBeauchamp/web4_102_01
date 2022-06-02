@foreach($resultats as $resultat)
<p>
    <a href="{{route($resultat->model.'.show', $resultat)}}">{{$resultat->nom}}</a>
</p>
@endforeach