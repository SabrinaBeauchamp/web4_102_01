@extends('mesLayouts.layout')
@section('titre')
Villes

@endsection

@section('arial')
<li>></li>
<li><a href="{{route('categoriesRegion.index')}}">MRC</a></li>
<li>></li>
<li><a href="#">Villes</a></li>
@endsection

@section('contenu')
    <ul>
        @foreach($villes as $ville)
        <li>
            <a class="commodites" href="{{route('villes.show', ['ville'=>$ville])}}">{{$ville->nom}}</a>
        </li>
        @endforeach
    </ul>
    <a class="boutonUniforme" href="{{route('villes.create')}}">Ajouter une ville</a>
@endsection