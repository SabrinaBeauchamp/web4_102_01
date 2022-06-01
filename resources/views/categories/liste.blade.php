
    @foreach($categories as $categorie)
    <li>
        <a class="commodites btn2" href="{{route('categories.show', $categorie)}}">
            {{$categorie->nom}}
        </a>
    </li>
    @endforeach


