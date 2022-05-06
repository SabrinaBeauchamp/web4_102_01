@extends('mesLayouts.layout')

@section('titre')
    Évènements - {{$evenements->nom}}
@endsection

@section('contenu')
<h2>Voulez-vous supprimer ce forfait {{$evenements->nom}}</h2>
    <form action="{{route('.evenements.destroy', $evenements)}}" method="post">
        @csrf
        <div><button type="submit" name="delete">Supprimer le forfait</button></div>
        
        <div>
            <button data-icon="done" type="submit">Modifier le forfait</button>
        </div>
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('.evenements.index')}}">Retour aux forfaits</a>
    </div>
@endsection