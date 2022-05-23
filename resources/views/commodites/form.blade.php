@csrf
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
<div>
    <label for="groupecommodite_id">Groupe</label>
    @include("groupeCommodite.select", ['selected'=>$commodite->groupecommodite_id])
</div>