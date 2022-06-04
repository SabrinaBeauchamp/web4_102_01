@extends('mesLayouts.dashboard')

@section('titre gestion')
    gere les évènement
@endsection

@section('contenu gestion')
<div class="containerEvenenement">
    <div class="container">
        @include('users.evenements.list')
    </div>
</div>
    @if(Auth::check() && Auth::user()->role === 'admin')
    <button class="btnGestionAjouter">
        <a href="{{route('evenements.create')}}">Créer un nouveau évènement<i class="fa-solid fa-user-plus"></i></a>
    </button>
    @endif
@endsection