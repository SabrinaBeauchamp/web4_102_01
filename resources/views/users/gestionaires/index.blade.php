@extends('mesLayouts.dashboard')

@section('titre gestion')
    Bonjour {{Auth::user()->name}}
@endsection


@section('contenu gestion')
<div class="information_utilisateur">
    @if($user->verification === false)
    <h3>Veuillez compléter votre inscription</h3>
    <a href="{{route('users.gestionaires.edit', Auth::user())}}">Gestion de compte</a>
    @endif
    <h5>Information du compte</h5>
    <x-champ-text name="nom" label="Nom">{{Auth::user()->name}}</x-champs-text>
    <x-champ-text name="email" label="Email">{{Auth::user()->email}}</x-champs-text>
    <x-champ-text name="role" label="Role">{{Auth::user()->role->name}}</x-champs-text>
</div>
@if(Auth::user())
    <li>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit">Deconnexion</button>
        </form>
    </li>
@else
    <li>
        <a href="{{route('login')}}">Me connecter</a>
    </li>
@endif
<x-champ-lien href="{{route('users.gestionaires.delete', Auth::user())}}" titre="Supprimer votre compte"></x-champ-lien>
@endsection