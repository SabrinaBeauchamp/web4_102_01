@extends('mesLayouts.dashboard')

@section('contenu gestion')
    @include('users.forfaits.list')
    @if(Auth::check() && Auth::user()->role === 'admin')
    <x-champ-lien href="{{route('forfaits.create')}}" titre="Créer un nouveau évènement"></x-champ-lien>
    @endif
@endsection