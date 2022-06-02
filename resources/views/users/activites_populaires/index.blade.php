@extends('mesLayouts.dashboard')

@section('titre gestion')
    Activités populaires
@endsection

@section('contenu gestion')
    @include('entreprises.toggle')
    <div class="pagination">
        {{$entreprises->links()}}
    </div>
    <style>
        .w-5{
            display: inline;
            width: 5%
        }
    </style>
@endsection