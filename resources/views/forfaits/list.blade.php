@foreach ($forfaits as $forfait)
            <div class="forfait">
                <a href="{{route('forfaits.show', $forfait)}}">{{$forfait->nom}}</a>
                <div class="choix">
                    <a href="{{route('forfaits.edit', $forfait)}}">Modifier</a>
                    <a href="{{route('forfaits.delete', $forfait)}}">Supprimer</a>
                </div>
            </div> 
        @endforeach