@extends('mesLayouts.layout')
@section('titre')
Groupes
@endsection
@section('arial')
<li>></li>
<li><a href="#">Groupes</a></li>
@endsection
@section('contenu')
@foreach($groupes as $groupe)
<ul>
    <li>
        <a class="commodites" href="{{route('groupes.show', ['groupe'=>$groupe])}}">{{$groupe['nom']}}</a>
    </li>
</ul>
@endforeach
<a href="{{route('groupes.create')}}">Ajouter un groupe</a>
@endsection