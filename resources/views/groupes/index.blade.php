@extends('mesLayouts.layout')
<h1>Groupes</h1>
@foreach($groupes as $groupe)
<ul>
    <li>
        <a class="commodites" href="{{route('groupes.show', ['groupe'=>$groupe])}}">{{$groupe['nom']}}</a>
    </li>
</ul>
@endforeach
<a href="{{route('groupes.create')}}">Ajouter un groupe</a>