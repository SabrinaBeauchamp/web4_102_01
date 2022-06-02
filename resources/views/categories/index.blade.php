@extends('mesLayouts.layout')

@section('titre')
Les catégories
@endsection

@section('contenu')

@foreach($categories as $categorie)
    <li>
        <a class="btn2 commodites" href="{{route('categories.show', $categorie)}}">
            {{$categorie->nom}}
        </a>
    </li>
@endforeach

<a  class="boutonUniforme" href="{{route('categories.create')}}">Ajouter une catégorie</a>
@endsection