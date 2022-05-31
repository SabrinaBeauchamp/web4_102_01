@extends('mesLayouts.dashboard')

@section('titre gestion')
    gere les entreprises
@endsection

@section('contenu gestion')
    <a href="{{route('entreprises.create')}}">Ajouter une entreprise</a>
    @include('entreprises.liste')
@endsection