@extends('mesLayouts.dashboard')

@section('contenu gestion')
    <form action="{{route('evenements.update', $evenement)}}" method="post"  class="formEntreprise">
        @include('evenements.form')
        @include('villes.radio', ['checked'=>$evenement->ville->id])
        <div class="conteneurEntreprise5">
            <div><button class="btnCreer" type="submit">Modifier</button></div>
        </div>
    </form>
@endsection