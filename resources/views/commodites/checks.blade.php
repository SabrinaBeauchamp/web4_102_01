<fieldset>
    <ul>
        @foreach($commodites as $commodite)
            <li>
                <label>
                    @if(in_array($commodite->id, $checkeds))
                        <input type="checkbox" name="commodite_id[]" id="commodite_id_{{$commodite->id}}" value="{{$commodite->id}}" checked="checked">
                    @else
                        <input type="checkbox" name="commodite_id[]" id="commodite_id_{{$commodite->id}}" value="{{$commodite->id}}">
                    @endif
                    {{$commodite->nom}}
                </label>
            </li>
        @endforeach
    </ul>
</fieldset>