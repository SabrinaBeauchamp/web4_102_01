@extends('mesLayouts.dashboard')

@section('titre gestion')
    Tous mes favories
@endsection

@section('contenu gestion')
    <h3>Entreprises</h3>
    @foreach(Auth::user()->likesEntreprises as $entreprise)
    <p>{{$entreprise->nom}}</p> 
    @endforeach
@endsection