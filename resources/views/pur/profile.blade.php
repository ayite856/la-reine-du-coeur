@extends('layouts.pur')

@section('title', 'Mon profil - Pur')

@section('content')
@php($currentUser = $user ?? auth()->user())

<div class="card">
    <div class="card-header">
        <h1 class="card-title">Mon profil</h1>
        <p class="card-subtitle">Informations de votre compte utilisateur.</p>
    </div>

    <ul class="info-list">
        <li>
            <span class="info-label">Nom</span>
            <strong>{{ $currentUser->name }}</strong>
        </li>
        <li>
            <span class="info-label">Adresse email</span>
            <strong>{{ $currentUser->email }}</strong>
        </li>
        @if ($currentUser->created_at)
            <li>
                <span class="info-label">Date d'inscription</span>
                <strong>{{ $currentUser->created_at->format('d/m/Y') }}</strong>
            </li>
        @endif
    </ul>

    <div class="actions-row">
        <a href="{{ route('pur.dashboard') }}" class="btn btn-secondary">Retour au dashboard</a>
        <form method="POST" action="{{ route('pur.logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Déconnexion</button>
        </form>
    </div>
</div>
@endsection