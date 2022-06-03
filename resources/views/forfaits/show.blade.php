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
    <div class="conteneurForfaitSpecifique">
        <div class="conteneurGauche">
            <h2 class="nomForfait">{{$forfait->nom}}</h2>
            <div class="champ description">
                {{$forfait->description}}
            </div>

            <!-- pas besoin qu'il marche le btn panier -->
            <button class="btnAjoutPanier">
                <div class="prixForfait"></div>
            </button>
        </div>
        <div class="conteneurDroite">
            <div class="conteneurImg">
                @if(file_exists('img/forfaits/'.$forfait->id.'.jpg'))
                <x-champ-img src="{{asset('img/forfaits/'.$forfait->id.'.jpg')}}" alt="forfait {{$forfait->id}}"></x-champ-img>
                @else
                <img src="{{asset('images/PlaceholderImage.svg')}}" alt="image de l'entreprise" class="image-evenement">
                @endif
            </div>
        </div>
    </div>
@endsection