<select name="categorie_region_id" id="categorie_region_id">
    @foreach($categoriesRegion as $categorieRegion)
        @if(isset($selected) && $categorieRegion->id === $selected)
            <option value="{{$categorieRegion->id}}" selected="selected">{{$categorieRegion->nom}}</option>
        @else
            <option value="{{$categorieRegion->id}}">{{$categorieRegion->nom}}</option>
        @endif
    @endforeach
</select>