@extends('mesLayouts.layout')
@section('titre')

<h1>{{$ville->nom}}</h1>

@endsection
@section('contenu')

<p>({{$categorieRegion->nom}})</p>
<h2>Entreprises</h2>
<ul>
    @foreach($entreprises as $entreprise)
    <li>
        <a class="commodites" href="{{route('entreprises.show', ['entreprise'=>$entreprise])}}">{{$entreprise->nom}}</a>
    </li>
    @endforeach
</ul>
<a href="{{route('villes.edit', ['ville' => $ville])}}">Modifier</a> <br>
<a href="{{route('villes.delete', ['ville'=>$ville])}}">Suprimmer</a>
@endsection
