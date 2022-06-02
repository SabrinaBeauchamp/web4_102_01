@extends('mesLayouts.layout')

@section('titre')
    Forfaits - {{$forfait->nom}}
@endsection
    
@section('arial')
    <li>></li>
    <li><a href="{{route('forfaits.categories.show', $forfait->categorie)}}">{{$forfait->categorie->nom}}</a></li>
    <li>></li>
    <li><a href="{{route('forfaits.show', $forfait)}}">{{$forfait->nom}}</a></li>
@endsection
    
@section('contenu')
    <h2>{{$forfait->nom}}</h2>
    @include('forfaits.form')
    <p>{{$forfait->categorie->nom}}</p>
    @if(file_exists('img/forfaits/'.$forfait->id.'.jpg'))
    <x-champ-img src="{{asset('img/forfaits/'.$forfait->id.'.jpg')}}" alt="forfait {{$forfait->id}}"></x-champ-img>
    @else
    <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
    @endif
@endsection