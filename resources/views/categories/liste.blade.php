@foreach($categories as $categorie)
<ul>
    <li>
        <a href="{{route('categories.show', $categorie)}}">
            {{$categorie->nom}} ({{$categorie->groupe->nom}})
        </a>
        @include('entreprises.liste', ['entreprises'=>$categorie->entreprises])
    </li>
</ul>
@endforeach