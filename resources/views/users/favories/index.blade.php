@extends('mesLayouts.dashboard')

@section('titre gestion')
Vos favories
@endsection

@section('contenu gestion')
<h2 class="titre_favori">
    {{$type}}
</h2>
<div class="containerFavori ">
    @foreach($favories as $favorie)
    <div class="favorie carteGestionMembre">
        
        <p class="titre">{{$favorie->nom}}</p> 
    </div>
    @endforeach
    <button class="btnGestionLien">
        <a href="{{route($lien)}}">Aller voir les autres {{$type}}</a>
    </button>
</div>
@endsection