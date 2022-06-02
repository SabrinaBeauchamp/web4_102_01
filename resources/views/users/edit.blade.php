@extends('mesLayouts.dashboard')

@section('titre gestion')
    Information de votre compte
@endsection

@section('contenu gestion')
    <form action="{{route('users.gestionaires.update', Auth::user())}}" method="post">
        <div class="conteneurProfil">
            <div class="conteneurProfilTop">
                <img src="{{asset('williamCSS\temporaire_img\profilPlaceholder.png')}}" alt="" class="DashProfilImage">
                <h2 class="dashNomUser">{{Auth::user()->name}}</h2>
            </div>
            @include('users.form')
            <div class="conteneurProfilButtons">
                <button class="buttonProfilMaj" type="'submit'">Mettre à jour les informations</button>
                <button class="buttonProfilDelete"><a href="{{route('users.gestionaires.delete', Auth::user())}}">Supprimer mon compte</a></button>
            </div>
        </div>
    </form>
    <div class="options">
        <x-champ-lien href="{{route('users.gestionaires.index')}}" titre="Retour au tableau de bord"></x-champ-lien>
    </div>
@endsection