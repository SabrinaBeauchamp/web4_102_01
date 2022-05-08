@extends('mesLayouts.layout')

@section('titre')
    Évènements - {{$evenements->nom}}
@endsection

@section('contenu')
    <form action="" method="post">
        <h4>Connexion</h4>
        @csrf
        <x-champ-text name="username" label="Nom d'utilisateur"></x-champ-text>
        <x-champ-text name="password" label="Mots de passe"></x-champ-text>
        <x-champ-button type="submit"  titre="Connexion"></x-champ-button>
        <x-champ-button type=""  titre="Inscription"></x-champ-button>
    </form>
@endsection