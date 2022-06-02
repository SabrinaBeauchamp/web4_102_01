@extends('mesLayouts.layout')

@section('titre')
Tout les évènements
@endsection

@section('arial')
<li>></li>
<li><a href="{{route('evenements.index')}}">Évènements</a></li>
@endsection

@section('contenu')
<section class="calendrierEvenements">
    <div class="container-titre detectAnim">
        <h2 class="titre1">Calendrier des</h2>
        <h2 class="titre-accent">EVENEMENTS</h2>
        <h2 class="titre2"></h2>
    </div>
    <div class="container-calendrier">
        <div class="calendrier-grid">
            @if($evenements->count() > 0)
                @include('evenements.list')
            @else
                <p>la liste est vide</p>
            @endif
    </div>
</section>
   

    {{-- <x-champ-lien href="{{route('evenements.create')}}" titre="Créer un nouveau évènement"></x-champ-lien> --}}
@endsection