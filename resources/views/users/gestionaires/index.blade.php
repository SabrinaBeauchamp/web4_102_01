@extends('mesLayouts.dashboard')

@section('titre gestion')
    menu
@endsection


@section('contenu gestion')
@if(Auth::user()->role->name === 'admin')
<div class="information_entreprise">
    <h5>Information de l'entreprise</h5>

</div>
@endif
<div class="information_utilisateur">
    <h5>Information du compte</h5>
    <x-champ-text name="nom" label="Nom">{{Auth::user()->name}}</x-champs-text>
    <x-champ-text name="prenom" label="Prenom">{{Auth::user()->prenom}}</x-champs-text>
    <x-champ-text name="email" label="Email">{{Auth::user()->email}}</x-champs-text>
    <x-champ-text name="role" label="Role">{{Auth::user()->role->name}}</x-champs-text>
</div>
@endsection