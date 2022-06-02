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
                <div class="calendrier-item"></div>
                <div class="calendrier-item"></div>
                <div class="calendrier-item">1
                    <div class="popup">
                        <div class="nom-evenement">
                            NOM DE L'EVENEMENT
                        </div>
                        <div class="dates-evenement">
                            XX mois au XX mois
                        </div>
                        <div class="description-evenement">
                            Vestibulum non ipsum ut ipsum facilisis scelerisque ut non metus. Sed quis ligula ut massa ultrices congue. 
                        </div>
                        <div class="prix-evenement">
                            28.98$
                            /jour/personne
                        </div>
                    </div>
                    <div class="popup">
                        <div class="nom-evenement">
                            NOM DE L'EVENEMENT
                        </div>
                        <div class="dates-evenement">
                            XX mois au XX mois
                        </div>
                        <div class="description-evenement">
                            Vestibulum non ipsum ut ipsum facilisis scelerisque ut non metus. Sed quis ligula ut massa ultrices congue. 
                        </div>
                        <div class="prix-evenement">
                            28.98$
                            /jour/personne
                        </div>
                    </div>
                </div>
                <div class="calendrier-item">2
                    <div class="popup">
                        <div class="nom-evenement">
                            NOM DE L'EVENEMENT
                        </div>
                        <div class="dates-evenement">
                            XX mois au XX mois
                        </div>
                        <div class="description-evenement">
                            Vestibulum non ipsum ut ipsum facilisis scelerisque ut non metus. Sed quis ligula ut massa ultrices congue. 
                        </div>
                        <div class="prix-evenement">
                            28.98$
                            /jour/personne
                        </div>
                    </div>
                    <div class="popup">
                        <div class="nom-evenement">
                            NOM DE L'EVENEMENT
                        </div>
                        <div class="dates-evenement">
                            XX mois au XX mois
                        </div>
                        <div class="description-evenement">
                            Vestibulum non ipsum ut ipsum facilisis scelerisque ut non metus. Sed quis ligula ut massa ultrices congue. 
                        </div>
                        <div class="prix-evenement">
                            28.98$
                            /jour/personne
                        </div>
                    </div>
                    <div class="popup">
                        <div class="nom-evenement">
                            NOM DE L'EVENEMENT
                        </div>
                        <div class="dates-evenement">
                            XX mois au XX mois
                        </div>
                        <div class="description-evenement">
                            Vestibulum non ipsum ut ipsum facilisis scelerisque ut non metus. Sed quis ligula ut massa ultrices congue. 
                        </div>
                        <div class="prix-evenement">
                            28.98$
                            /jour/personne
                        </div>
                    </div>
                </div>
                <div class="calendrier-item">3<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">4<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">5<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">6<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">7<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">8<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">9<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">10<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">11<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">12<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">13<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">14<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">15<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">16<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">17<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">18<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">19<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">20<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">21<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">22<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">23<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">24<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">25<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">26<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">27<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">28<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">29<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">30<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item">31<div class="popup">ANPAN ANPAN ANPAN ANPAN ANPAN</div></div>
                <div class="calendrier-item"></div>
                <div class="calendrier-item"></div>
            </div>
            <div class="calendrier-popup">
                @if($evenements->count() > 0)
                    @include('evenements.list')
                @else
                    <p>la liste est vide</p>
                @endif
            </div>
        </div>
    </section>

    {{-- <x-champ-lien href="{{route('evenements.create')}}" titre="Créer un nouveau évènement"></x-champ-lien> --}}
@endsection