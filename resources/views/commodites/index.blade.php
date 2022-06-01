@extends('mesLayouts.layout')
<h1>Commodites</h1>
@foreach($commodites as $commodite)
    <a class="commodites" href="{{route('commodites.show', ['commodite'=>$commodite])}}">{{$commodite['nom']}}</a> <br>
@endforeach
<a class="boutonUniforme" href="{{route('commodites.create')}}">Ajouter une commodite</a>

