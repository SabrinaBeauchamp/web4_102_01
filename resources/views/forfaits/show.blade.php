@extends('mesLayouts.layout')

@section('titre')
    Forfaits - {{$forfait->nom}}
@endsection

@section('contenu')
<h2>{{$forfait->nom}}</h2>
    <form action="{{route('forfaits.store')}}" method="post">
        @csrf
        <x-champ-text name="nom" label="Nom">{{$forfait->nom}}</x-champs-text>
        <x-champ-number name="prix" label="Prix">{{$forfait->prix}}</x-champs-text>
        <div>
            @include('forfaits.categories.checks', ['checkeds'=>$forfait->categories->pluck("id")->toArray()])
        </div>
        <x-champ-textArea name="description" label="Description">{{$forfait->description}}</x-champs-text>
        
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('forfaits.index')}}">Retour aux forfaits</a>
        {{-- <a href="{{route('forfaits.edit', $forfait)}}">Modifier le forfait</a> --}}
    </div>
@endsection