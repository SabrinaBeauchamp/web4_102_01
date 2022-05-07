<form action="{{route('groupes.destroy', $groupe)}}" method="post">
    @csrf
    <p>Voulez-vous vraiment supprimer {{$groupe['nom']}}?</p>
    <div><button>Supprimer</button></div>
</form>