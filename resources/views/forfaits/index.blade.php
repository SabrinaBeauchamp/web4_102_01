@extends('mesLayouts.layout')

@section('titre')
Tout les forfaits
@endsection

@section('panneaux0')
    <div class="panneau0 isPanneau panneau-close">
        <ul class="menu0">
            <li>
                <a class="btn1" href="{{route('acceuil')}}">Acceuil</a>
            </li><li>
                <a class="btn1" href="{{route('categoriesRegion.index')}}">MRC</a>
            </li>
            <li>
                <a class="btn1" href="{{route('forfaits.categories.index')}}">Catégories</a>
            </li>
            <li>
                <a class="btn1" href="{{route('evenements.index')}}">Évènements</a>
            </li>
            @if(Auth::user())
                <li><a href="{{route('users.gestionaires.index')}}">Compte</a></li>
                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit">Deconnexion</button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{route('login')}}">Me connecter</a>
                </li>
            @endif
        </ul>
    </div>
    <div class="panneau isPanneau panneau-close">
            <h2>Groupes</h2>
            <ul class="menu1">
                @foreach($groupes as $groupe)
                    <li>
                        <a href="{{route('groupes.show', ['groupe'=>$groupe])}}" class="btn1">{{$groupe['nom']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
@endsection

@section('panneaux')
<!-- index n'a pas de panneaux supplémentaires -->
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
