@extends('mesLayouts.dashboard')

@section('contenu gestion')


<form action="{{route('groupesCommodite.store')}}" method="post">
    @include('groupeCommodite.form')
    <div><button>Créer</button></div>
</form>
@endsection