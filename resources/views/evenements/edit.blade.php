@extends('mesLayouts.dashboard')

@section('titre gestion')
    Tous mes favories
@endsection

@section('contenu gestion')
<h2>Évènement {{$evenement->nom}}</h2>
    <form action="{{route('evenements.update', $evenement)}}" method="post">
        @include('evenements.form')
        @include('villes.radio', ['checked'=>$evenement->ville->id])
        <a class="close"> Modifier</a>
        <div class="conteneurPopup">
            <div class="popup close">
                <div class="conteneurTopPopup">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <!-- Texte va varier, soit activité, événement ou forfait -->
                    <h3>Êtes-vous sûr de vouloir supprimer ce membre de la liste?</h3>
                </div>
                <div class="conteneurBottomPopup">
                    <button class="btnPopup" type="submit" titre="">Modifier</button>
                    <button class="btnPopup">Non</button>
                </div>
            </div>
        </div>
    </form>
    <div class="options">
        <x-champ-lien href="{{route('evenements.index')}}" titre="Retour aux évènements"></x-champ-lien>
    </div>
@endsection