@extends('mesLayouts.layout')
@section('contenu')
    <h1>Villes</h1>
    <ul>
        @foreach($villes as $ville)
        <li>
            <a class="commodites" href="{{route('villes.show', ['ville'=>$ville])}}">{{$ville->nom}}</a>
        </li>
        @endforeach
    </ul>
    <a href="{{route('villes.create')}}">Ajouter une ville</a>
@endsection