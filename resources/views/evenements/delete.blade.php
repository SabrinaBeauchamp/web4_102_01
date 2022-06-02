@extends('mesLayouts.dashboard')

@section('contenu gestion')
<h2>Voulez-vous supprimer ce forfait {{$evenements->nom}}</h2>
    <form action="{{route('evenements.destroy', $evenements)}}" method="post">
        @csrf
        <div class="conteneurPopup">
            <div class="popup">
                <div class="conteneurTopPopup">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <h3>Êtes-vous sûr de vouloir supprimer l'évènement'{{$evenements->nom}}?</h3>
                </div>
                <div class="conteneurBottomPopup">
                    <button type="submit" name="delete" class="btnPopup">Oui</button>
                    <button class="btnPopup"><a href="{{route('users.gestionaires.index')}}">Non</a></button>
                </div>
            </div>
        </div>
    </form>
    <div class="options">
        <x-champ-lien href="{{route('evenements.index')}}" titre="Retour aux évènements"></x-champ-lien>
    </div>
@endsection