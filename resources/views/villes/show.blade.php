<h1>{{$ville->nom}}</h1>
<p>({{$categorieRegion->nom}})</p>
<h2>Entreprises</h2>
<ul>
    @foreach($entreprises as $entreprise)
    <li>
        <a href="{{route('entreprises.show', ['entreprise'=>$entreprise])}}">{{$entreprise->nom}}</a>
    </li>
    @endforeach
</ul>
<a href="{{route('villes.edit', ['ville' => $ville])}}">Modifier</a> <br>
<a href="{{route('villes.delete', ['ville'=>$ville])}}">Suprimmer</a>
