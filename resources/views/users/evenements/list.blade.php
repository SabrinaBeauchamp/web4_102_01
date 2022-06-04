@foreach ($evenements as $evenement)
    <div class="evenement">
        @if ($evenement->dateNow >= $evenement->end)
        <x-champ-lien href="{{route('evenements.delete', $evenement)}}" titre="{{$evenement->nom}}"></x-champ-lien>
        <div class="btnModifierFini">
            <x-champ-lien href="{{route('evenements.edit', $evenement)}}" titre="Modifier"></x-champ-lien>
        </div>
        <p class="pFini">FINI</p>
        @if($evenement->end === null)
        <p class="pDate">{{$evenement->start}}</p>
        @else
        <p class="pDate">{{$evenement->start}} à {{$evenement->end}}</p>
        @endif
        @else
        <x-champ-lien href="{{route('evenements.show', $evenement)}}" titre="{{$evenement->nom}}"></x-champ-lien>
            <div class="choix">
                <div class="choix1">
                <x-champ-lien href="{{route('evenements.delete', $evenement)}}" titre="Supprimer">
                </x-champ-lien>
                </div>
               <div class="choix2">
               <x-champ-lien href="{{route('evenements.edit', $evenement)}}" titre="Modifier">
                </x-champ-lien>
               </div>
            </div>
        @endif
    </div> 
@endforeach