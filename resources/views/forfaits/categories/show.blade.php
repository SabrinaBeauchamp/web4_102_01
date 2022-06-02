@extends('mesLayouts.layout')

@section('titre')
    Categorie des forfait
@endsection

@section('contenu')
    <div class="conteneurListeForfaits">
        <!-- le h2 va pouvoir etre changer -->
        <h2>{{$categorie->nom}}</h2>
        <!-- faire foreach -->
        <div class="conteneurAllForfait">
        
            @if($categorie->forfaits->count() === 0)
                <p>la liste est vide</p> 
            @else
                @include("forfaits.list", ['forfaits'=>$categorie->forfaits])
            @endif
        </div>
        <div class="conteneurBtnAutres">
            @if (Auth::check() && Auth::user()->role->name === 'user')
                <div class="button">
                    <a href="{{route('forfaits.categories.index')}}">Retour aux catégories des forfaits</a>
                </div>
            @else
                <div class="button">
                    <a href="{{route('forfaits.create')}}" class="btnCreateForfait">Créer un forfait</a>
                </div>
            @endif
        </div>
        
    </div>
@endsection