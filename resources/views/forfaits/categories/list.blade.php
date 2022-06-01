@foreach ($categories as $categorie)
<div class="conteneurCarteForfait1">
    <div class="conteneurImgForfait1">
        <!-- le div va devoir avoir son propre texte et le img sa propre src pour l'image.  -->
        <img src="{{asset('williamCSS/temporaire_img/imgPlaceholder.png')}}" alt="" class="imgForfait1">
        <div class="texteImgForfait1"> {{$categorie->nom}}</div>
    </div>
    <div class="conteneurTexteForfait1">
        <!-- changer les textes pour du vrai texte -->
        <h3>Catchphrase!</h3>
        <div class="descriptionForfait1">{{$categorie->message}}</div>
    </div>
    <!-- animation de fleche quand hover avec un after -->
    <div class="conteneurBoutonForfait1">
        <a href="{{route('forfaits.categories.show', $categorie)}}" class="boutonCarteForfait1">{{$categorie->nom}}</a>
    </div>
</div>
@endforeach