@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('groupes.update', $groupe)}}" method="post"  class="formEntreprise">
    @include('groupes.form')
    <<div class="conteneurEntreprise5">
        <div><button class="btnCreer" type="submit">Modifier</button></div>
    </div>
</form>
@endsection