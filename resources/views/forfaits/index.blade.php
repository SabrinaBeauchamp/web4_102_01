@extends('mesLayouts.layout')

@section('titre')
Tout les forfaits
@endsection

@section('contenu')
<div>
    <div class="conteneurForfaits">
        <div class="conteneurForfait">
            <div class="conteneurImgForfait">
                @if(file_exists('img/forfaits/'.$forfait->id.'.jpg'))
                    <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                @else
                    <x-champ-img src="{{asset('img/forfaits/'.$forfait->id.'.jpg')}}" alt="forfait {{$forfait->id}}"></x-champ-img>
                @endif
                <h1>Forfait escapade gourmande</h1>
            </div>
            <div class="conteneurInfoForfait">
                <h2>Catch phrase!</h2>
                <p>On aime ça faire pousser des plantes icite.</p>
                <a href="" class="boutonForfait">Découvrez ce forfait</a>
            </div>
        </div>
        @foreach($forfaits as $forfait)
            {{$forfait->nom}}
        @endforeach
    </div>
    <div class="conteneurCirclePage">
        <input type="radio" class="radio1">
        <input type="radio" class="radio2">
    </div>
</div>
@if($forfaits->count() > 0)
@include('forfaits.list')
@else
<p>la liste est vide</p>
@endif
<x-champ-lien href="{{route('forfaits.create')}}" titre="Créer un nouveau forfait"></x-champ-lien>

@endsection
    <div>
        @include('forfaits.list')
    </div>
    
    <!-- @if(Auth::check() && Auth::user()->role->name === 'admin') -->
    <x-champ-lien href="{{route('forfaits.create')}}" titre="Créer un nouveau forfait"></x-champ-lien>
    <x-champ-lien href="{{route('forfaits.categories.index')}}" titre="Retour dans liste des catégories de forfait"></x-champ-lien>
    <!-- @endif -->
@endsection
