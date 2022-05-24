@csrf
<div>
    <label for="nom">Nom</label>
    <span>
        <input type="text" name="nom" id="nom" value="{{$groupe->nom}}">
    </span>
</div>
<div>
    <label for="position">position</label>
    <span>
        <input type="text" name="position" id="position" value="{{$groupe->position}}">
    </span>
</div>