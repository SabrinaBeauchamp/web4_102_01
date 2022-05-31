<fieldset>
    @foreach($groupes as $groupe)   
        <label for="groupe">{{$groupe->nom}}</label>
        <input type="checkbox" name="groupes[]" id="groupes_{{$groupe->id}}" value="{{$groupe->id}}">
    @endforeach
</fieldset>