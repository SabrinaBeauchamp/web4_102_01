<fieldset>
    @foreach($forfaits as $forfait)
        <label>
        @if(in_array($forfaits->id, $checkeds))
            <input 
                type="checkbox" 
                name="entreprise_id[]" 
                id="entreprise_id{{$entreprise->id}}"
                value="{{$entreprise->id}}"
                checked = "checked">
            @else
            <input 
                type="checkbox" 
                name="entreprise_id[]" 
                id="entreprise_id{{$entreprise->id}}"
                value="{{$entreprise->id}}">
            @endif
            {{$categorie->nom}}
        </label>
    @endforeach
</fieldset>