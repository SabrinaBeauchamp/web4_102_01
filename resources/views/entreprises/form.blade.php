@csrf
<div>
    <label for="nom">Nom</label>
    <span><input type="text" name="nom" id="nom" value="{{$entreprise->nom}}"></span>
</div>
<div>
    <label for="description">Description</label>
    <span><input type="text" name="description" id="description" value="{{$entreprise->description}}"></span>
</div>
<div>
    <label for="image_url">Image url</label>
    <span><input type="text" name="image_url" id="image_url" value="{{$entreprise->image_url}}"></span>
</div>
<div>
    <label for="ouverture">Ouverture</label>
    <span><input type="number" name="ouverture" id="ouverture" value="{{$entreprise->ouverture}}"></span>
</div>
<div>
    <label for="fermeture">Fermeture</label>
    <span><input type="number" name="fermeture" id="fermeture" value="{{$entreprise->fermeture}}"></span>
</div>
<div>
    <label for="adresse">Adresse</label>
    <span><input type="text" name="adresse" id="adresse" value="{{$entreprise->adresse}}"></span>
</div>
<div>
    <label for="telephone">Telephone</label>
    <span><input type="text" name="telephone" id="telephone" value="{{$entreprise->telephone}}"></span>
</div>
<div>
    @include('groupes.checks', ['checkeds'=>$entreprise->categories->pluck("id")->toArray()])
</div>