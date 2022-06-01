<h1>{{$categorieRegion->nom}}</h1>
<ul>
    @foreach($villes as $ville)
    <li>
        <a href="{{route('villes.show', ['ville'=>$ville])}}">{{$ville->nom}}</a>
    </li>
    @endforeach
</ul>
<a href="{{route('categoriesRegion.edit', ['categorieRegion'=>$categorieRegion])}}">Modifier</a> <br>
<a href="{{route('categoriesRegion.delete', ['categorieRegion'=>$categorieRegion])}}">Supprimer</a>