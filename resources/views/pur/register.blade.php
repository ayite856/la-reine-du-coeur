@extends('layouts.pur')

@section('title', 'Inscription - Pur')

@section('content')
<div class="auth-wrapper">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Créer un compte</h1>
            <p class="card-subtitle">Inscrivez-vous pour accéder à l'espace Pur.</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('pur.register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nom complet</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="email">Adresse email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmer le mot de passe</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>

        <div class="auth-footer">
            Déjà inscrit ? <a href="{{ route('pur.login') }}">Se connecter</a>
        </div>
    </div>
</div>
@endsection