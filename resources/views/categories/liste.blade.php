
    @foreach($categories as $categorie)
    <li>
        <a class="btn2 commodites" href="{{route('categories.show', $categorie)}}">
            {{$categorie->nom}}
        </a>
    </li>
    @endforeach


