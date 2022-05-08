@foreach ($forfaits as $forfait)
    <div class="forfait">
        <a href="{{route('forfaits.show', $forfait)}}">{{$forfait->nom}}</a>
        <x-champ-button type="" href="{{route('forfaits.edit', $forfait)}}" titre="Modifier"></x-champ-button>
        <x-champ-button type="" href="{{route('forfaits.delete', $forfait)}}" titre="Supprimer"></x-champ-button>
    </div> 
    
@endforeach