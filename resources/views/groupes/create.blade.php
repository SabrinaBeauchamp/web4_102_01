@extends('mesLayouts.dashboard')

@section('contenu gestion')

<form action="{{route('groupes.store')}}" method="post">
    @include('groupes.form')
    <div>
        <button>Ajouter le groupe</button>
    </div>
</form>
@endsection