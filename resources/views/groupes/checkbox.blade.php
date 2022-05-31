<fieldset>
    @foreach($groupes as $groupe)  
            <label class="container" for="groupe">{{$groupe->nom}}
                <input class="checkbox" type="checkbox" name="groupes[]" id="groupes_{{$groupe->id}}" value="{{$groupe->id}}">
                <span class="checkmark"></span>
            </label>
    @endforeach
    <label class="container" for="entreprises_populaires">Entreprises Populaires
        <input class="checkbox" type="checkbox" name="entreprises_populaires" id="entreprises_populaires">
        <span class="checkmark"></span>
    </label>
</fieldset>