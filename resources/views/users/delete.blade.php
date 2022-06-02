@extends('mesLayouts.dashboard')

@section('contenu gestion')
    <form action="{{route('users.gestionaires.destroy', Auth::user())}}" method="post">
        @csrf
        <div class="conteneurPopup">
            <div class="popup">
                <div class="conteneurTopPopup">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <h3>Êtes-vous sûr de vouloir supprimer votre compte {{Auth::user()->name}}?</h3>
                </div>
                <div class="conteneurBottomPopup">
                    <button type="submit" name="delete" class="btnPopup">Oui</button>
                    <button class="btnPopup"><a href="{{route('users.gestionaires.index')}}">Non</a></button>
                </div>
            </div>
        </div>
    </form>
@endsection
