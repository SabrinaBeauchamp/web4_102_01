@extends('mesLayouts.layout')
@section('titre')
<h1>Commodites</h1>
@endsection

@section('arial')
<li>></li>
<li><a href="#">Commodites</a></li>
@endsection

@section('contenu')
@foreach($commodites as $commodite)
    <a class="commodites" href="{{route('commodites.show', ['commodite'=>$commodite])}}">{{$commodite['nom']}}</a> <br>
@endforeach
<a class="boutonUniforme" href="{{route('commodites.create')}}">Ajouter une commodite</a>
@endsection
