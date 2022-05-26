@extends('mesLayouts.dashboard')

@section('titre gestion')
    Tous mes favories
@endsection

@section('contenu gestion')
<form action="{{route('entreprises.update', $entreprise)}}" method="post">
    @include('entreprises.form')
    @include('villes.radio', ['checked'=>$entreprise->ville->id])
    <div><button>Modifier</button></div>
</form>
@endsection