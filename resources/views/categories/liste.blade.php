@foreach($categories as $categorie)
<li>
    <button class="btn2">
        <a href="{{route('categories.show', $categorie)}}">
            {{$categorie->nom}} ({{$categorie->groupe->nom}})
        </a>
    </button>
</li>
@endforeach