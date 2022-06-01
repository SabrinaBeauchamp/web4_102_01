@extends('mesLayouts.layout')

@section('titre')
    Categorie des forfait
@endsection

@section('contenu')
    <h2>Categorie des forfaits</h2>
    @if($categories->count() > 0)
        <div class="conteneurPageForfait1 ">
            <div class="conteneurForfaits1">
                <i class="fa-solid fa-chevron-left carouselArrowGauche"></i>
                <!-- Utiliser foreach pour chacune des cartes -->
                @include('forfaits.categories.list')
                <i class="fa-solid fa-chevron-right carouselArrowDroite"></i>
            </div>
        </div>
    @else
        <p>la liste est vide</p>
    @endif
    @if(Auth::check() && Auth::user()->role->name === 'admin')
        <x-champ-lien href="{{route('forfaits.categories.create')}}" titre="Créer une nouvelle catégorie de forfait"></x-champ-lien>
    @endif
@endsection