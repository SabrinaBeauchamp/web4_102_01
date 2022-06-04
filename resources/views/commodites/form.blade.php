@csrf
<div class="conteneurEntreprise1">
    <h3>Formulaire commoditer </h3>
    <x-champ-text name="nom" id="nom" value="">{{$categorieRegion->nom}}</x-champ-text>
    <x-champ-text name="nom" id="nom" value="">{{$categorieRegion->nom}}</x-champ-text>
    <x-champ-text name="nom" id="nom" value="">{{$categorieRegion->nom}}</x-champ-text>
    <x-champ-textArea name="nom" id="nom" value="">{{$categorieRegion->nom}}</x-champ-textArea>
</div>
<div>
    <label for="nom">Nom</label>
    <span><input type="text" name="nom" id="nom" value="{{$commodite->nom}}"></span>
</div>
<div>
    <label for="description">Descripiton</label>
    <span><input type="text" name="description" id="description" value="{{$commodite->description}}"></span>
</div>
<div>
    <label for="logo_svg">Logo SVG</label>
    <span><input type="text" name="logo_svg" id="logo_svg" value="{{$commodite->logo_svg}}"></span>
</div>
<div class="conteneurEntreprise3">
    <div>
        <label for="groupecommodite_id">Groupe</label>
        @include("groupeCommodite.select", ['selected'=>$commodite->groupecommodite_id])
    </div>
</div>