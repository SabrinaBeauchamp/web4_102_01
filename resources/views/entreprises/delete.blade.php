@extends('mesLayouts.dashboard')

@section('titre gestion')
    Tous mes favories
@endsection

@section('contenu gestion')
<form action="{{route('entreprises.destroy', $entreprise)}}" method="post">
    @csrf
    <p>Voulez-vous vraiment supprimer {{$entreprise['nom']}}?</p>
    <div><button>Supprimer</button></div>
</form>
@endsection