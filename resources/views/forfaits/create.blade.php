@extends('mesLayouts.layout')

@section('titre')
    Nouveau forfait
@endsection

@section('contenu')
<h2>Création d'un nouveau forfait</h2>
    <form action="{{route('forfaits.store')}}" method="post">
        @csrf
        <x-champsInputCase :titre="'prix'" :type="'text'"></x-champsInput>
        <x-champsInputCase :titre="'nom'" :type="'text'"></x-champsInput>
        <x-champsCheckBox :titre="'categorie'"></x-champsCheckBox>
        <x-champsTextArea :titre="'description'" :cols="'30'" :row="'10'"></x-champsTextArea>
        <div>
            <button data-icon="done" type="submit">Créer le forfait</button>
        </div>
    </form>
    <div class="options">
        <a data-icon="calendar_view_month" href="{{route('forfaits.index')}}">Retour aux forfaits</a>
    </div>
@endsection