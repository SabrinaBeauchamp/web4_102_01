@extends('mesLayouts.dashboard')

@section('titre gestion')
    menu
@endsection


@section('contenu gestion')
<h2>Voulez-vous supprimer ce forfait {{Auth::user()->name}}</h2>
    <form action="{{route('users.gestionaires.destroy', Auth::user())}}" method="post">
        @csrf
        <x-champ-button-delete type="submit" titre="supprimer le compte"></x-champ-button>
        
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('users.gestionaires.index')}}">Retour a l'acceuil</a>
    </div>
@endsection
