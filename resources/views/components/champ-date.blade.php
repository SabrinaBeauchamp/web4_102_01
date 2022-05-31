<x-champ :name="$name" :label="$label">
    <input type="date" id="{{$name}}" name="{{$name}}"
            value="{{$value}}"
            min="2022-01-01" max="2150-12-31">
</x-champ>