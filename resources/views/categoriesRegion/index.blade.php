<h1>MRC</h1>
<ul>
    @foreach($categoriesRegion as $categorieRegion)
        <li>
            <a href="{{route('categoriesRegion.show', ['categorieRegion'=>$categorieRegion])}}">{{$categorieRegion->nom}}</a>
        </li>
    @endforeach
</ul>
<a href="{{route('categoriesRegion.create')}}">Ajouter une MRC</a>