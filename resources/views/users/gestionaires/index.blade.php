@extends('mesLayouts.dashboard')

@section('contenu gestion')
<form action="{{route('users.gestionaires.update', Auth::user())}}" method="post" class="form">
    <div class="conteneurProfil">
        <div class="conteneurProfilTop">
            <img src="{{asset('williamCSS\temporaire_img\profilPlaceholder.png')}}" alt="" class="DashProfilImage">
            <h2 class="dashNomUser">{{Auth::user()->name}}</h2>
        </div>
        @include('users.form')
        <div class="conteneurProfilButtons">
            <button class="buttonProfilMaj"><a href="{{route('users.gestionaires.update', Auth::user())}}">Mettre à jour les informations</a></button>
        </div>
    </div>
</form>
@endsection