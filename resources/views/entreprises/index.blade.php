@extends('mesLayouts.layout')

@section('titre')
    Les entreprises
@endsection

@section('contenu')
    @include('entreprises.liste')
    @if(Auth::check() && Auth::user()->role === 'admin')
    <a href="{{route('entreprises.create')}}">Ajouter une entreprise</a>
    @endif
@endsection