@extends('mesLayouts.dashboard')



@section('contenu gestion')
<div class="containerEvenenement">
    <div class="container">
    <h3>
Gestion des évènements
</h3>
        @include('users.evenements.list')
    </div>
</div>
    @if(Auth::check() && Auth::user()->role === 'admin')
    <button class="btnGestionAjouter">
        <a href="{{route('evenements.create')}}">Créer un nouveau évènement<i class="fa-solid fa-user-plus"></i></a>
    </button>
    @endif
@endsection