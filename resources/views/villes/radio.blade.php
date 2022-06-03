<fieldset class="conteneurEntreprise4">
<h3>
    Villes
</h3>
    <ul class="ulCommodite">
        @foreach($villes as $ville)
        <li class="liRadio">
            <label>
                @if($ville->id === $checked)
                    <input type="radio" name="ville_id" id="ville_id_{{$ville->id}}" value="{{$ville->id}}" checked="checked">
                @else
                    <input type="radio" name="ville_id" id="ville_id_{{$ville->id}}" value="{{$ville->id}}">
                @endif
                {{$ville->nom}}
            </label>
        </li>
        @endforeach
    </ul>
</fieldset>