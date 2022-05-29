@extends('mesLayouts.layout')

@section('titre')
    Forfaits - {{$forfaits->nom}}
@endsection

@section('contenu')
<h2>Voulez-vous supprimer ce forfait {{$forfaits->nom}}</h2>
    <form action="{{route('.categories.destroy', $categorie)}}" method="post">
        @csrf
        <x-champ-button type="submit" titre="'Supprimer la catégorie'"></x-champ-button>
        <x-champ-button-delete type="submit" titre="'Modifier la catégorie'"></x-champ-button>
    </form>
    <div class="options">
        <x-champ-lien  href="{{route('forfaits.categories.index')}}" titre="'Retour aux catégories'"></x-champ-lien>
    </div>
@endsection