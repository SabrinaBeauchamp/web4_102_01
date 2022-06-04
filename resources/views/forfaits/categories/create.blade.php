
@extends('mesLayouts.dashboard')

@section('titre gestion')
    Nouveau forfait
@endsection

@section('contenu gestion')
<h2>Création d'un nouveau forfait</h2>
    <form action="{{route('categories.store')}}" method="post"  class="formEntreprise">
        @csrf
        @include('forfaits.categories.form')
        
        
        <div class="conteneurEntreprise5">
            <div><button class="btnCreer" type="submit">Créer</button></div>
        </div>
    </form>
    <div class="options">
        <x-champ-lien  href="{{route('forfaits.categories.index')}}" titre="'Retour aux categories des forfaits"></x-champ-lien>
    </div>
@endsection