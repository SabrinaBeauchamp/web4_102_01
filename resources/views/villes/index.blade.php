@extends('mesLayouts.layout')
@section('titre')
<h1>Villes</h1>

@endsection
@section('contenu')
    <ul>
        @foreach($villes as $ville)
        <li>
            <a class="commodites" href="{{route('villes.show', ['ville'=>$ville])}}">{{$ville->nom}}</a>
        </li>
        @endforeach
    </ul>
    <a href="{{route('villes.create')}}">Ajouter une ville</a>
@endsection