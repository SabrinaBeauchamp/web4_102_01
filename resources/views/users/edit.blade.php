@extends('mesLayouts.dashboard')

@section('titre gestion')
    Information de votre compte
@endsection

@section('contenu gestion')
<h2>{{$user->name}}</h2>
    <form action="{{route('users.gestionaires.update', Auth::user())}}" method="post">
        @include('users.form')
        <x-champ-button type="'submit'" titre="Modifier les informations"></x-champ-button>
    </form>
    <div class="options">
        <x-champ-lien href="{{route('users.gestionaires.index')}}" titre="Retour au tableau de bord"></x-champ-lien>
    </div>
@endsection