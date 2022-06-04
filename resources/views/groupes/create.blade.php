@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('groupes.store')}}" method="post"  class="formEntreprise">
    @include('groupes.form')
    <div class="conteneurEntreprise5">
        <div><button class="btnCreer" type="submit">Créer</button></div>
    </div>
</form>
@endsection