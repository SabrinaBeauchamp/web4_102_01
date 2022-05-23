<nav>
    <ul>
        @foreach($groupes as $groupe)
            <li>
                <span>{{$groupe->nom}}</span>
                <ul>
                    @foreach($groupe->categories as $categorie)
                        <li><a href="{{route('categories.show', $categorie)}}">{{$categorie->nom}}</a></li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</nav>