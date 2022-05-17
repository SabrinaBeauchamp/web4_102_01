<x-champ :name="$name" :label="$label">
    <input type="{{$type}}" name="{{$name}}" class="{{$class}}" id="{{$name}}" required autocomplete="{{$name}}">
    {{$slot}}
</x-champ>