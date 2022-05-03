@extends('mesLayouts.layout')

@section('titre')
    Forfaits - {{$forfaits->nom}}
@endsection

@section('contenu')
<h2>Voulez-vous supprimer ce forfait {{$forfaits->nom}}</h2>
    <form action="{{route('forfaits.destroy', $forfaits)}}" method="post">
        @csrf
        <div><button type="submit" name="delete">Supprimer le forfait</button></div>
        
        <div>
            <button data-icon="done" type="submit">Modifier le forfait</button>
        </div>
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('forfaits.index')}}">Retour aux forfaits</a>
    </div>
@endsection