@extends('layouts.pur')

@section('title', 'Connexion - Pur')

@section('content')
<div class="auth-wrapper">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Connexion</h1>
            <p class="card-subtitle">Accédez à votre espace utilisateur Pur.</p>
        </div>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        @if ($errors->has('auth_error'))
            <div class="alert alert-error">{{ $errors->first('auth_error') }}</div>
        @endif

        @if ($errors->any() && !$errors->has('auth_error'))
            <div class="alert alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('pur.login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Adresse email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>

        <div class="auth-footer">
            Pas encore de compte ? <a href="{{ route('pur.register') }}">Créer un compte</a>
        </div>
    </div>
</div>
@endsection