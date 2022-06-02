@extends('mesLayouts.dashboard')

@section('contenu gestion')
<div class="information_utilisateur">
    <div class="conteneurProfil">
        <div class="conteneurProfilTop">
            <img src="{{asset('williamCSS\temporaire_img\profilPlaceholder.png')}}" alt="" class="DashProfilImage">
            <h2 class="dashNomUser">{{Auth::user()->name}}</h2>
        </div>
    </div>
</div>
@endsection