<fieldset>
    <label>
        @if($favorie->id === $checked)
            <input type="radio" name="favorie_id" id="favorie_id_{{$favorie->id}}" value="{{$favorie->id}}" checked="checked">
        @else
            <input type="radio" name="favorie_id" id="favorie_id_{{$favorie->id}}" value="{{$favorie->id}}">
        @endif
    </label>
</fieldset>