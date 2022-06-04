@extends('mesLayouts.dashboard')


@section('contenu gestion')
<form action="{{route('entreprises.update', $entreprise)}}" method="post" class="formEntreprise">
    @include('entreprises.form')
    @include('villes.radio', ['checked'=>$entreprise->ville->id])
    <div class="conteneurEntreprise5">
        <div><button class="btnCreer" type="submit">Modifier</button></div>
    </div>
</form>
@endsection