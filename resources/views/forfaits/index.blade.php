@extends('mesLayouts.layout')

@section('titre')
    Tout les forfaits
@endsection

@section('contenu')
<div>
    <div class="conteneurForfait">
        <div class="conteneurImgForfait">
            <img src="" alt="" class="imageForfait">
            <h1>Forfait escapade gourmande</h1>
        </div>
        <div class="conteneurInfoForfait">
            <h2>Catch phrase!</h2>
            <p>On aime ça faire pousser des plantes icite.</p>
            <a href="" class="boutonForfait">Découvrez ce forfait</a>
        </div>
    </div>
</div>
    @if($forfaits->count() > 0)
            @include('forfaits.list')
        @else
            <p>la liste est vide</p>
    @endif
    <x-champ-lien href="{{route('forfaits.create')}}" titre="Créer un nouveau forfait"></x-champ-lien>
   
@endsection