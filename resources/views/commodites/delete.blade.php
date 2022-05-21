<form action="{{route('commodites.destroy', $commodite)}}" method="post">
    @csrf
    <p>Voulez-vous vraiment supprimer {{$commodite['nom']}}?</p>
    <div><button>Supprimer</button></div>
</form>