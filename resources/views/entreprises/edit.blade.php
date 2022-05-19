<form action="{{route('entreprises.update', $entreprise)}}" method="post">
    @include('entreprises.form')
    <div><button>Modifier</button></div>
</form>