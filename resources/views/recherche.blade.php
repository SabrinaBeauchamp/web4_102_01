<ul>
    @foreach($resultats as $resultat)
    <li>
        <a href="{{route($resultat->model.'.show', $resultat)}}">{{$resultat->nom}}<span> ({{$resultat->model}})</span></a>
    </li>
    @endforeach
</ul>