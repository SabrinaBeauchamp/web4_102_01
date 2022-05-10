<fieldset>
    @foreach($categories as $categorie)
    <ul>
        <li>
            <label>
                @if($categorie->id === $checked)
                    <input type="radio" name="categorie_id" id="categorie_id_{{$categorie->id}}" value="{{$categorie->id}}" checked="checked">
                @else
                    <input type="radio" name="categorie_id" id="categorie_id_{{$categorie->id}}" value="{{$categorie->id}}">
                @endif
                {{$categorie->nom}}
            </label>
        </li>
    </ul>
    @endforeach
</fieldset>