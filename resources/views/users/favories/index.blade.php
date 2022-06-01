@extends('mesLayouts.dashboard')

@section('titre gestion')
{{$type}}
@endsection

@section('contenu gestion')
    @foreach($favories as $favorie)
    <p>{{$favorie->nom}}</p> 
    @endforeach
@endsection