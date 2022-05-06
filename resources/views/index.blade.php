@extends('mesLayouts.layout')

@section('titre')
    Agrotouristique
@endsection

@section('contenu')
<h2>Agrotouristique</h2>
    <nav>
        <ul>
            <li><a href="{{route('forfaits.index')}}">Forfaits</a></li>
            <li><a href="{{route('.evenements.index')}}">Évènements</a></li>
            <li><a href="">Connexion</a></li>
        </ul>
    </nav>
    <form action="" method="post">
        <h4>Connexion</h4>
        @csrf
        <x-champ-text name="username" label="Nom d'utilisateur"></x-champ-text>
        <x-champ-text name="password" label="Mots de passe"></x-champ-text>
        <x-champ-button type="submit"  titre="Connexion"></x-champ-button>
        <x-champ-button type=""  titre="Inscription"></x-champ-button>
    </form>
    <form action="" method="post">
        <h4>Inscription</h4>
        @csrf
        <x-champ-text name="nom" label="Nom"></x-champ-text>
        <x-champ-text name="prenom" label="Prénom"></x-champ-text>
        <x-champ-number name="codePostal" label="Code Postal"></x-champ-number>
        <x-champ-number name="tel" label="Numéro de téléphone"></x-champ-number>
        <x-champ-text name="couriel" label="Courriel"></x-champ-text>
        <x-champ-text name="password" label="Nouveau Mots de passe"></x-champ-text>
        <x-champ-text name="password" label="confirmation Mots de passe"></x-champ-text>
        <!-- <x-champ-check name="Infolettre"></x-champ-check> -->
        <x-champ-button type=""  titre="Inscription"></x-champ-button>
    </form>
@endsection