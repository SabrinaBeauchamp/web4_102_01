@extends('mesLayouts.layout')
@section('titre')
<h1>{{$groupeCommodite->nom}}</h1>
@endsection

@section('arial')
<li>></li>
<li><a href="#">{{$groupeCommodite->nom}}</a></li>
@endsection


@section('contenu')
@foreach($commodites as $commodite)
    <a class="commodites" href="{{route('commodites.show',['commodite' => $commodite] )}}">
        {{$commodite->nom}} <br>
    </a>
@endforeach
<br>
<a class="boutonUniforme" href="{{route('groupesCommodite.edit', ['groupeCommodite'=>$groupeCommodite])}}">Modifier</a> <br>
<a class="boutonUniforme" href="{{route('groupesCommodite.delete', ['groupeCommodite'=>$groupeCommodite])}}">Supprimer</a> <br>


@endsection