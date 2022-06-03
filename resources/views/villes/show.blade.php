@extends('mesLayouts.layout')
@section('titre')

<h1>{{$ville->nom}}</h1>

@endsection
@section('contenu')

@section('arial')
<li>></li>
<li><a href="{{route('categoriesRegion.index')}}">MRC</a></li>
<li>></li>
<li><a href="{{route('categoriesRegion.show', ['categorieRegion' => $categorieRegion])}}">{{$categorieRegion->nom}}</a></li>
<li>></li>
<li><a href="#">{{$ville->nom}}</a></li>
@endsection

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
