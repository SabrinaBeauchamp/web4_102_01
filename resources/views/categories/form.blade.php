@csrf
<div>
    <label for="nom">Nom</label>
    <span>
        <input type="text" name="nom" id="nom" value="{{$categorie->nom}}">
    </span>
</div>
<div>
    <label for="groupe_id">Groupe</label>
    @include("groupes.select", ['selected'=>$categorie->groupe_id])
</div>
<div>
    <label for="entreprise_id">Entreprise(s)</label>
    @include('entreprises.checklist', ['checkeds'=>$categorie->entreprises->pluck("id")->toArray()])
</div>