@extends('mesLayouts.dashboard')

@section('titre gestion')
    Activités populaires
@endsection

@section('contenu gestion')
<div class="containerPopulaire">
    <div class="container">
        @include('entreprises.toggle')
    </div>
</div>
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