
    @foreach($categories as $categorie)
    <li>
        <button class="btn2">
            <a class="commodites" href="{{route('categories.show', $categorie)}}">
                {{$categorie->nom}}
            </a>
        </button>
    </li>
    @endforeach


