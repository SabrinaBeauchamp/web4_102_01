@extends('mesLayouts.layout')

@section('titre')
    Nouveau forfait
@endsection

@section('contenu')
<h2>Création d'un nouveau forfait</h2>
    <form action="{{route('categories.store')}}" method="post">
        @csrf
        <x-champ-text name="nom" label="Nom">{{$categorie->nom}}</x-champs-text>
        <x-champ-text name="message" label="Cathphrase">{{$categorie->message}}</x-champs-text>
        
        <x-champ-button type="'submit'" titre="Créer la catégorie"></x-champ-button>
    </form>
    <div class="options">
        <x-champ-lien  href="{{route('forfaits.categories.index')}}" titre="Retour aux categories des forfaits"></x-champ-lien>
    </div>
@endsection