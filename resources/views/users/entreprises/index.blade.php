
@extends('mesLayouts.dashboard')

@section('contenu gestion')
<div class="conteneurGestionMembre conteneurResize">
    <button class="btnGestionAjouter">

    </button>
    
    @include('users.entreprises.liste')
    
    <div class="pagination">
        {{$entreprises->links()}}
    </div>
</div>
    <style>
        .w-5{
            display: inline;
            width: 5%
        }
    </style>


  
@endsection

