@extends('mesLayouts.layout')

@section('titre')
Tout les évènements
@endsection

@section('contenu')

    @if($evenements->count() > 0)
            @include('evenements.list')
        @else
            <p>la liste est vide</p>
    @endif

    
@endsection