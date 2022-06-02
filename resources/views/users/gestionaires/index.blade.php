@extends('mesLayouts.dashboard')

@section('titre gestion')
    menu
@endsection


@section('contenu gestion')
<div class="information_utilisateur">
    <h5>Information du compte</h5>
    <div class="conteneurProfil">
        <div class="conteneurProfilTop">
            <img src="{{asset('williamCSS\temporaire_img\profilPlaceholder.png')}}" alt="" class="DashProfilImage">
            <h2 class="dashNomUser">{{Auth::user()->name}}</h2>
        </div>
        @include('users.form')
    </div>
</div>
@endsection