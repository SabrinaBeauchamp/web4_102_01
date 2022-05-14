<ul>
    @foreach($resultats as $resultat)
    <li>
        <a href="{{route($resultat->model.'.show', $resultat)}}">{{$resultat->nom}}</a>
    </li>
    @endforeach
</ul>