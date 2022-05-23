@extends('mesLayouts.layout')

@section('titre')
Création d'un évènements
@endsection

@section('contenu')
<form action="{{route('evenements.store')}}" method="post">
    @include('evenements.form')
    <x-champ-date name="date" label="Date de l'évènement"></x-champ-date>
    @include('villes.radio', ['checked'=>$evenement->ville_id])
    
    <x-champ-button href="" type="submit" titre="Créer l'évènement"></x-champ-button>
</form>
    <x-champ-lien href="{{route('forfaits.create')}}" titre="Créer un nouveau forfait"></x-champ-lien>
@endsection