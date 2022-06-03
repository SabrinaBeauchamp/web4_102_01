@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('groupesCommodite.update', $groupeCommodite)}}" method="post">
    @include('groupeCommodite.form')
    <div><button>Modifier</button></div>
</form>
@endsection