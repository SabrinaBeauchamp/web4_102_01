@extends('mesLayouts.layout')

@section('titre')
    Forfaits - {{$forfaits->nom}}
@endsection

@section('contenu')
<h2>Voulez-vous supprimer ce forfait {{$forfaits->nom}}</h2>
    <form action="{{route('.categories.destroy', $categorie)}}" method="post">
        @csrf
        <div><button type="submit" name="delete">Supprimer la catégorie</button></div>
        
        <div>
            <button data-icon="done" type="submit">Modifier la catégorie</button>
        </div>
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('forfaits.categories.index')}}">Retour aux catégories</a>
    </div>
@endsection