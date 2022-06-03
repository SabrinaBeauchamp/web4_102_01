@extends('mesLayouts.dashboard')


@section('titre gestion')
    Forfaits - {{$forfait->nom}}
@endsection

@section('contenu gestion')
<h2>Forfait {{$forfait->nom}}</h2>
    <form action="{{route('forfaits.update', $forfait)}}" method="post">
        @include('forfaits.form')
        <x-champ-img src="{{asset('img/forfaits/'.$forfait->id.'.jpg')}}" alt="forfait {{$forfait->id}}"></x-champ-img>
        <x-champ-file name="photo" label="photo"></x-champs-text>
        
        <x-champ-button type="'submit'" titre="Modifier le forfait"></x-champ-button>
    </form>
    <div class="options">
        <x-champ-lien href="{{route('forfaits.index')}}" titre="Retour aux forfaits"></x-champ-lien>
    </div>
@endsection