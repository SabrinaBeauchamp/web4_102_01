@extends('mesLayouts.layout')

@section('titre')
Création d'un évènements
@endsection

@section('contenu')
<form action="{{route('.evenements.store')}}" method="post">
    @csrf
        <x-champ-text name="nom" label="Nom"></x-champ-text>
        <x-champ-date name="date" label="Date de l'évènement"></x-champ-date>
        <x-champ-textArea name="description" label="Description">{{$evenements->description}}</x-champs-text>
        <x-champ-button type="submit" titre="Créer l'évènement"></x-champ-button>
</form>
    <x-champ-lien href="{{route('forfaits.create')}}" titre="Créer un nouveau forfait"></x-champ-lien>
@endsection