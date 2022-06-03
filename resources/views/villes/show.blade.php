@extends('mesLayouts.layout')
@section('titre')

{{$ville->nom}}

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

<ul>
    @foreach($entreprises as $entreprise)
    <li>
        <a class="commodites" href="{{route('entreprises.show', ['entreprise'=>$entreprise])}}">{{$entreprise->nom}}</a>
    </li>
    @endforeach
</ul>
<br>
<a  class="boutonUniforme" href="{{route('villes.edit', ['ville' => $ville])}}">Modifier</a> <br>
<a  class="boutonUniforme" href="{{route('villes.delete', ['ville'=>$ville])}}">Suprimmer</a> <br>
@endsection
