@extends('mesLayouts.layout')

@section('titre')
    Forfaits - {{$forfaits->nom}}
@endsection

@section('contenu')
<h2>Voulez-vous supprimer ce forfait {{$forfaits->nom}}</h2>
    <form action="{{route('.categories.destroy', $categorie)}}" method="post">
        @csrf
        <div class="conteneurPopup">
            <div class="popup">
                <div class="conteneurTopPopup">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <h3>Êtes-vous sûr de vouloir supprimer la catégorie {{$catgorie}}?</h3>
                </div>
                <div class="conteneurBottomPopup">
                    <button type="submit" name="delete" class="btnPopup">Oui</button>
                    <button class="btnPopup"><a href="{{route('users.gestionaires.index')}}">Non</a></button>
                </div>
            </div>
        </div>
    </form>
    <div class="options">
        <x-champ-lien  href="{{route('forfaits.categories.index')}}" titre="'Retour aux catégories'"></x-champ-lien>
    </div>
@endsection