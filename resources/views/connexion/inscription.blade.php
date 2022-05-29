@extends('mesLayouts.layout')

@section('titre')
    Évènements - {{$evenements->nom}}
@endsection

@section('contenu')
    <form action="" method="post">
        <h4>Inscription</h4>
        @csrf
        <x-champ-text name="nom" label="Nom"></x-champ-text>
        <x-champ-text name="prenom" label="Prénom"></x-champ-text>

        <h4>statu</h4>
        <x-champ-check name="statu" label="entreprise"></x-champ-check>
        <x-champ-check name="statu" label="membre"></x-champ-check>

        <h4>information de l'entreprise</h4>
        <x-champ-text name="nom_entreprise" label="Nom de l'entreprise"></x-champ-text>
        <x-champ-text name="adresse_entreprise" label="Adresse de l'entreprise"></x-champ-text>
        <x-champ-number name="codePostal" label="Code Postal"></x-champ-number>
        <x-champ-text name="categorie" label="L'expertise de l'entreprise"></x-champ-text>
        
        <h4>Vos information</h4>
        <x-champ-text name="adresse" label="Adresse"></x-champ-text>
        <x-champ-number name="codePostal" label="Code Postal"></x-champ-number>
        <x-champ-number name="tel" label="Numéro de téléphone"></x-champ-number>
        <x-champ-number name="cell" label="Numéro de cellulaire"></x-champ-number>

        <h4>information de connexion</h4>
        <x-champ-text name="couriel" label="Courriel"></x-champ-text>
        <x-champ-text name="password" label="Nouveau mots de passe"></x-champ-text>
        <x-champ-text name="password" label="confirmation du mots de passe"></x-champ-text>
        <div>
            <x-champ-check name="infolettre" label="Voulez-vous vous inscrire à l'infolettre"></x-champ-check>
            <x-champ-check name="accepter" label="Acceptez-vous nos condition d'utilisation"></x-champ-check>
        </div>
        <x-champ-button type="submit"  titre="Inscription"></x-champ-button>
    </form>
    
@endsection