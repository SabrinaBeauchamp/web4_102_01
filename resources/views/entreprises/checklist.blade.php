<fieldset>
    @foreach($entreprises as $entreprise)
    <label>
        @if(in_array($entreprise->id, $checkeds))
        <input 
            type="checkbox" 
            name="entreprise_id[]" 
            id="entreprise_id_{{$entreprise->id}}"
            value="{{$entreprise->id}}"
            checked="checked"
        >
        @else
        <input 
            type="checkbox" 
            name="entreprise_id[]" 
            id="entreprise_id_{{$entreprise->id}}"
            value="{{$entreprise->id}}"
        >
        @endif
        {{$entreprise->nom}}
    </label>
    @endforeach
</fieldset>