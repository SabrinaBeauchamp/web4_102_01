@extends('mesLayouts.dashboard')

@section('contenu gestion')
<form action="{{route('evenements.store')}}" method="post"  class="formEntreprise">
    @include('evenements.form')
    <x-champ-date name="date" label="Date de l'évènement"></x-champ-date>
    @include('villes.radio', ['checked'=>$evenement->ville_id])
    
    <div class="conteneurEntreprise5">
        <div><button class="btnCreer" type="submit">Créer</button></div>
    </div>
</form>
    <x-champ-lien href="{{route('forfaits.create')}}" titre="Créer un nouveau forfait"></x-champ-lien>
@endsection