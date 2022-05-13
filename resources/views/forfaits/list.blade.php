@foreach ($forfaits as $forfait)
    <div class="forfait">
        <a href="{{route('forfaits.show', $forfait)}}">{{$forfait->nom}}</a>
        <x-champ-lien href="{{route('forfaits.edit', $forfait)}}" titre="Modifier"></x-champ-lien>
        <x-champ-lien href="{{route('forfaits.delete', $forfait)}}" titre="Supprimer"></x-champ-lien>
    </div> 
@endforeach