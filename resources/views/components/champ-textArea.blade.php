<x-champ :name="$name" :label="$label">
    <textarea name="{{$name}}" id="{{$name}}" cols="30" rows="10">{{$slot}}</textarea>
</x-champ>