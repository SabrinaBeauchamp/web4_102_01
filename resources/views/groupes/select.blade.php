<select name="groupe_id" id="groupe_id">
    @foreach($groupes as $groupe)
        @if(isset($selected) && $groupe->id === $selected)
            <option value="{{$groupe->id}}" selected="selected">{{$groupe->nom}}</option>
        @else
            <option value="{{$groupe->id}}">{{$groupe->nom}}</option>
        @endif
    @endforeach
</select>