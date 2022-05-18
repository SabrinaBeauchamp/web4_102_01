@extends('mesLayouts.dashboard')

@section('titre gestion')
    Tous mes favories
@endsection

@section('contenu gestion')
    @foreach(Auth::user()->likesEntreprises as $entreprise)
    {{$entreprise->nom}}

    @endforeach
    <h3>Entreprises</h3>
    <h3>Évènements</h3>
    <h3>Forfaits</h3>
@endsection