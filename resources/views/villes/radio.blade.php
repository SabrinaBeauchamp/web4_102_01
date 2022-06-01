<fieldset>
    @foreach($villes as $ville)
    <ul>
        <li>
            <label>
                @if($ville->id === $checked)
                    <input type="radio" name="ville_id" id="ville_id_{{$ville->id}}" value="{{$ville->id}}" checked="checked">
                @else
                    <input type="radio" name="ville_id" id="ville_id_{{$ville->id}}" value="{{$ville->id}}">
                @endif
                {{$ville->nom}}
            </label>
        </li>
    </ul>
    @endforeach
</fieldset>