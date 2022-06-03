@extends('mesLayouts.dashboard')

@section('contenu gestion')


<form action="{{route('categoriesRegion.store')}}" method="post">
    @include('categoriesRegion.form')
    <div>
        <button>Ajouter le MRC</button>
    </div>
</form>
@endsection