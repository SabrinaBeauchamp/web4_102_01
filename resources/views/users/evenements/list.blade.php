@foreach ($evenements as $evenement)
    <div class="evenement">
        @if ($evenement->dateNow >= $evenement->end)
        <x-champ-lien href="{{route('evenements.delete', $evenement)}}" titre="{{$evenement->nom}}"></x-champ-lien>
        <p>FINI</p>
        @if($evenement->end === null)
        <p>{{$evenement->start}}</p>
        @else
        <p>{{$evenement->start}} à {{$evenement->end}}</p>
        @endif
        @else
        <x-champ-lien href="{{route('evenements.show', $evenement)}}" titre="{{$evenement->nom}}"></x-champ-lien>
            <div class="choix">
                <x-champ-lien href="{{route('evenements.delete', $evenement)}}" titre="Supprimer"></x-champ-lien>
                <x-champ-lien href="{{route('evenements.edit', $evenement)}}" titre="Modifier"></x-champ-lien>
            </div>
        @endif
    </div> 
@endforeach