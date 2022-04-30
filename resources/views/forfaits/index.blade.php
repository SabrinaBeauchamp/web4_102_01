@extends('mesLayouts.layout')

@section('titre')
    Tout les forfaits
@endsection

@section('contenu')
    @if($forfaits->count() > 0)
        @foreach ($forfaits as $forfait)
            <div class="forfait">
                <a href="{{route('forfaits.show', $forfait)}}">{{$forfait->nom}}</a>
            </div> 
        @endforeach
        @else
            <p>la liste est vide</p>
    @endif
@endsection