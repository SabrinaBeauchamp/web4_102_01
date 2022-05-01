@extends('mesLayouts.layout')

@section('titre')
    Tout les forfaits
@endsection

@section('contenu')
    @if($forfaits->count() > 0)
        @foreach ($forfaits as $forfait)
            <div class="forfait">
                <a href="{{route('forfaits.show', $forfait)}}">{{$forfait->nom}}</a>
                <div class="choix">
                    <a href="{{route('forfaits.edit', $forfait)}}">Modifier</a>
                    <a href="{{route('forfaits.delete', $forfait)}}">Supprimer</a>
                </div>
            </div> 
        @endforeach
        @else
            <p>la liste est vide</p>
    @endif
@endsection