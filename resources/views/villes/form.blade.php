@csrf
<div>
    <label for="nom">Nom</label>
    <span><input type="text" name="nom" id="nom" value="{{$ville->nom}}"></span>
</div>
<div>
    <label for="categorie_region_id">Groupe</label>
    @include("categoriesRegion.select", ['selected'=>$ville->categorie_region_id])
</div>
<div>
    <label for="entreprise_id">Entreprise(s)</label>
    @include('entreprises.checklist', ['checkeds'=>$ville->entreprises->pluck("id")->toArray()])
</div>