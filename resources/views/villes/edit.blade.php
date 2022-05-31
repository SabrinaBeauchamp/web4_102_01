<form action="{{route('villes.update', $ville)}}" method="post">
    @include('villes.form')
    <div><button>Modifier</button></div>
</form>