@foreach ($categories as $categorie)
    <div class="categorie">
        <a href="{{route('forfaits.categories.show', $categorie)}}">
            <h3>{{$categorie->nom}}</h3>
        </a>
    </div> 
@endforeach