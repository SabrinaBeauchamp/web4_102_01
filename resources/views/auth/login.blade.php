@extends('mesLayouts.layout')

@section('contenu')
<div class="conteneurLoginUser">
        <h1 class="messageAccueil">Content de vous revoir!</h1>
        <div class="conteneurBoiteLogin">
            <div class="conteneurUsernamePassword">
                <div class="conteneurUsername">
                    <label class="labelLogin" for="username">Nom d'utilisateur</label>
                    <form class="conteneurInput" method="POST" action="{{ route('login') }}">
                        @csrf
                        <i class="fa fa-user iconLogin"></i>
                        <input type="email" placeholder="username@email.com" class="username @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="conteneurPassword">
                        <label class="labelLogin" for="motDePasse">Mot de passe</label>
                        <div class="conteneurInput">
                            <i class="fa-solid fa-lock iconLogin"></i>
                            <input type="password" placeholder="tacos123" class="motDePasse @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="conteneurBoutonLoginUser">
                    <button type="submit">Se connecter</button>
                </div>
                <div class="conteneurLiensLogin">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Mots de passe oublié?
                        </a>
                    @endif
                    <a href="{{route('register')}}"> Pas encore inscrit </a>
                </div>
            </form>
        </div>
    </div>

@endsection
