@extends('mesLayouts.layout')

@section('contenu')
    <h1>Entreprises</h1>
    @include('entreprises.liste')
    @if(Auth::check() && Auth::user()->role === 'admin')
    <a class="boutonUniforme" href="{{route('entreprises.create')}}">Ajouter une entreprise</a>
    @endif
@endsection