@extends('mesLayouts.connexion')

@section('contenu')
    <div class="conteneurRegisterPage">
        <h1 class="messageAccueilCreate">Créer un compte</h1>
        <div class="conteneurBoiteCreate">
            <div class="conteneurCreateTout">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="conteneurNom">
                        <label for="name" class="labelCreate">Nom</label>
                        <div class="conteneurInput">
                            <i class="fa fa-user iconRegister"></i>
                            <input type="text" name="name" id="name" placeholder="John Appleseed" class="name @error('name') is-invalid @enderror" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="conteneurEmail">
                        <label for="email" class="labelCreate">Email</label>
                        <div class="conteneurInput">
                            <i class="fa-solid fa-at iconRegister"></i>
                            <input type="text" name="email" id="email" placeholder="username@email.com" class="email @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="conteneurRole">
                        <label for="role_id" class="labelCreate">Role</label>
                        <select name="role_id" id="role_id" class="select @error('role_id') is-invalid @enderror">
                            <option value="">-- select --</option>
                            @foreach($roles as $role)

                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                        @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="conteneurPassword">
                        <label for="password" class="labelCreate">Mot de passe</label>
                        <div class="conteneurInput">
                            <i class="fa-solid fa-lock iconRegister"></i>
                            <input type="password" name="password" id="password" placeholder="tacos123" class="password  @error('password') is-invalid @enderror" required autocomplete="new-password"/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="conteneurPasswordConfirm">
                        <label for="password-confirm" class="labelCreate">Confirmer le mot de passe</label>
                        <div class="conteneurInput">
                            <i class="fa-solid fa-arrow-rotate-right iconRegister"></i>
                            <input type="password" id="password-confirm" name="password_confirmation" placeholder="..." class="passwordConfirm" required autocomplete="new-password"/>
                        </div>
                    </div>
                    <div class="conteneurBoutonRegister">
                        <button type="submit">S'inscrire</button>
                    </div>
                    <div class="conteneurBoutonRegister">
                        <a href="{{route('login')}}"> Vous avez déjas un compte </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
