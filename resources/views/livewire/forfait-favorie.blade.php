<div>
    <h2>
        <x-champ-lien href="{{route('forfaits.show', $forfait)}}" titre="{{$forfait->nom}}"></x-champ-lien>
    </h2>
    <button class="jaime" wire:click="addLike">
        @livewireStyles
        @livewireScripts
        <p>J'aime</p>
    </button>
</div>
