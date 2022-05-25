<form action="{{route('groupesCommodite.destroy', $groupeCommodite)}}" method="post">
    @csrf
    <p>Voulez-vous vraiment supprimer {{$groupeCommodite['nom']}}?</p>
    <div><button>Supprimer</button></div>
</form>