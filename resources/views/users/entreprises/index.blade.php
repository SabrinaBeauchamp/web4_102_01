@extends('mesLayouts.dashboard')

@section('titre gestion')
les entrepises
@endsection

@section('contenu gestion')
    @include('entreprises.liste')
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