@extends('mesLayouts.layout')

@section('titre')
    Categorie des forfait
@endsection

@section('contenu')
    <h2>Categorie des forfaits</h2>
    @if($categories->count() > 0)
            @include('forfaits.categories.list')
        @else
        <p>la liste est vide</p>
        @endif
        <x-champ-lien href="{{route('forfaits.categories.create')}}" titre="Créer une nouvelle catégorie de forfait"></x-champ-lien>
@endsection