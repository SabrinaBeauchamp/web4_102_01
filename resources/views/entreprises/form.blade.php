@csrf
<div>
    <label for="nom">Nom</label>
    <span><input type="text" name="nom" id="nom" value="{{$entreprise->nom}}"></span>
</div>
<div>
    <label for="adresse">adresse</label>
    <span><input type="text" name="adresse" id="adresse" value="{{$entreprise->adresse}}"></span>
</div>
<div>
    <label for="ville">Ville</label>
    <span><input type="text" name="ville" id="ville" value="{{$entreprise->ville}}"></span>
</div>
<div>
    <label for="codepostal">codepostal</label>
    <span><input type="text" name="codepostal" id="codepostal" value="{{$entreprise->codepostal}}"></span>
</div>
<div>
    <label for="telephone">Telephone</label>
    <span><input type="text" name="telephone" id="telephone" value="{{$entreprise->telephone}}"></span>
</div>
<div>
    <label for="url_photo">url_photo</label>
    <span><input type="text" name="url_photo" id="url_photo" value="{{$entreprise->url_photo}}"></span>
</div>
<div>
    <label for="url_logo">url_logo</label>
    <span><input type="text" name="url_logo" id="url_logo" value="{{$entreprise->url_logo}}"></span>
</div>
<div>
    <label for="url_site">url_site</label>
    <span><input type="text" name="url_site" id="url_site" value="{{$entreprise->url_site}}"></span>
</div>
<div>
    <label for="description">description</label>
    <span><input type="text" name="description" id="description" value="{{$entreprise->description}}"></span>
</div>
<div>
    @include('categories.checks', ['checkeds'=>$entreprise->categories->pluck("id")->toArray()])
</div>