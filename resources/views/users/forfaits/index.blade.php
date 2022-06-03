@extends('mesLayouts.dashboard')

@section('contenu gestion')
    <div class="conteneurGestionMembre">
        @include('users.forfaits.list')
    </div>
    @if(Auth::check() && Auth::user()->role === 'admin')
    <x-champ-lien href="{{route('forfaits.create')}}" titre="Créer un nouveau évènement"></x-champ-lien>
    @endif
@endsection