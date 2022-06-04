@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('groupesCommodite.update', $groupeCommodite)}}" method="post"  class="formEntreprise">
    @include('groupeCommodite.form')
    <div class="conteneurEntreprise5">
        <div><button class="btnCreer" type="submit">Modifier</button></div>
    </div>
</form>
@endsection