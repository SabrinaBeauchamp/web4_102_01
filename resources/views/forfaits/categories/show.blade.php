@extends('mesLayouts.layout')

@section('titre')
    Categorie des forfait
@endsection

@section('contenu')
    <h2>{{$categorie->nom}}</h2>
    @if($categorie->forfaits->count() === 0)
        <p>la liste est vide</p> 
    @else
        @include("forfaits.list", ['forfaits'=>$categorie->forfaits])
    @endif
    <x-champ-lien href="{{route('forfaits.categories.index')}}" titre="Retour aux catégories de forfait"></x-champ-lien>
    <x-champ-lien href="{{route('forfaits.create')}}" titre="Créer un forfait"></x-champ-lien>
@endsection