
@extends('mesLayouts.dashboard')

@section('contenu gestion')
<div class="conteneurGestionMembre conteneurResize">
    <button class="btnGestionAjouter">
        <a href="{{route('entreprises.create')}}">AJOUTER UN MEMBRE<i class="fa-solid fa-user-plus"></i></a>
        
    </button>
    
    @include('users.entreprises.liste')
    
    <div class="pagination">
        {{$entreprises->links()}}
    </div>
</div>
    <style>
        .w-5{
           
            width: 5%;
            color: #f25c5c;
            
        }
    </style>


  
@endsection

