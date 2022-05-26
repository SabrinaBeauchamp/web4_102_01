@extends('mesLayouts.dashboard')

@section('titre gestion')
    gere les entreprises
@endsection

@section('contenu gestion')
    @include('entreprises.liste')
    @if(Auth::check() && Auth::user()->role === 'admin')
    <a href="{{route('entreprises.create')}}">Ajouter une entreprise</a>
    @endif
@endsection