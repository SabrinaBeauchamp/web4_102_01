@extends('mesLayouts.dashboard')

@section('titre gestion')
    gere les évènement
@endsection

@section('contenu gestion')
    @include('users.evenements.list')
    @if(Auth::check() && Auth::user()->role === 'admin')
    <x-champ-lien href="{{route('evenements.create')}}" titre="Créer un nouveau évènement"></x-champ-lien>
    @endif
@endsection