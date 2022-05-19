@extends('mesLayouts.dashboard')

@section('titre gestion')
    Tous mes favories
@endsection

@section('contenu gestion')
    <h3>Entreprises</h3>
    @foreach(Auth::user()->likesEntreprises as $entreprise)
    <p>{{$entreprise->nom}}</p> 
    @endforeach
    <h3>Évènements</h3>
    @foreach(Auth::user()->likesEvenements as $evenement)
    <p>{{$evenement->nom}}</p> 
    @endforeach
    <h3>Forfaits</h3>
    @foreach(Auth::user()->likesForfaits as $forfait)
    <p>{{$forfait->nom}}</p> 
    @endforeach
@endsection