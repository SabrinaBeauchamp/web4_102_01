@extends('layouts.app')

@section('content')
<div>
    <h1>Page d'inscription</h1>
    <div>
        <div>
            <div>
                <div>Register</div>

                <div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <x-champ-input name="email" label="Couriel" type="email" class="@error('email') is-invalid @enderror"></x-champ-input>
                        <div>
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <x-champ-error name="email"></x-champ-error>
                            </div>
                        </div>

                        <div>
                            <label for="role_id">Role</label>
                            <select name="role_id" id="role_id" class="">
                                <option value="">-- select --</option>
                                @foreach($roles as $role)  
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <x-champ-input name="password" label="Mot de passe" type="password" class="@error('password') is-invalid @enderror">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </x-champ-input>
                        <!-- <div>
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                        </div> -->
                        <x-champ-input name="password-confirm" label="Confirmer le mot de passe" type="password" class=""></x-champ-input>
                        <div>
                            <x-champ-button-lien type="submit" href="" titre="M'inscrire"></x-champ-button-lien>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
