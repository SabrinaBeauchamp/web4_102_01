@extends('mesLayouts.layout')

@section('titre')
    {{$categorie->nom}}
@endsection

@section('contenu')
    <h2>{{$categorie->nom}}</h2>
    @if($categorie->count() > 0)
        <p>la liste est vide</p> 
    @else
        @include("forfaits.list", ['forfaits'=>$categorie->forfaits])
    @endif
@endsection