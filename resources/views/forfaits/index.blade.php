@extends('mesLayouts.layout')

@section('titre')
    Tout les forfaits
@endsection

@section('contenu')
    @if($forfaits->count() > 0)
            @include('forfaits.list')
        @else
            <p>la liste est vide</p>
    @endif
@endsection