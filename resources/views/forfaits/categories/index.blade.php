@extends('mesLayouts.layout')

@section('titre')
    Categorie des forfait
@endsection

@section('contenu')
    <h2>Categorie des forfaits</h2>
    @if($categories->count() > 0)
        @foreach ($categories as $categorie)
            <div class="categorie">
                <a href="{{route('.categories.show', $categorie)}}">
                    <h3>{{$categorie->nom}}</h3>
                </a>
            </div> 
        @endforeach
        @else
        <p>la liste est vide</p>
        @endif
@endsection