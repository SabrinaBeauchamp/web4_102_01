@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('groupes.update', $groupe)}}" method="post">
    @include('groupes.form')
    <div><button>Modifier</button></div>
</form>
@endsection