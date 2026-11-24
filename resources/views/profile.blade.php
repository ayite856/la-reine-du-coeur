@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <div class="card card--wide">
        <div class="card-header">
            <h1 class="card-title">Profil utilisateur</h1>
            <p class="card-subtitle">Informations associées à votre compte authentifié</p>
        </div>

        <ul class="profile-table">
            <li class="profile-row">
                <span class="profile-key">Nom</span>
                <span class="profile-val">{{ $user->name }}</span>
            </li>
            <li class="profile-row">
                <span class="profile-key">Adresse email</span>
                <span class="profile-val">{{ $user->email }}</span>
            </li>
            <li class="profile-row">
                <span class="profile-key">Date d'inscription</span>
                <span class="profile-val">{{ $user->created_at?->format('d/m/Y à H:i') }}</span>
            </li>
        </ul>

        <div class="actions-row">
            <a href="{{ route('dashboard') }}" class="btn-secondary-link">Retour au tableau de bord</a>
        </div>
    </div>
@endsection