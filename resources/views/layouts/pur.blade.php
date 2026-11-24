<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Espace Pur')</title>
    <style>
        :root {
            --bg: #f4f6fb;
            --surface: #ffffff;
            --text: #1e293b;
            --muted: #64748b;
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --danger: #dc2626;
            --danger-hover: #b91c1c;
            --success-bg: #dcfce7;
            --success-text: #166534;
            --error-bg: #fee2e2;
            --error-text: #991b1b;
            --border: #e2e8f0;
            --radius: 12px;
            --shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.08), 0 4px 10px -2px rgba(15, 23, 42, 0.04);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: var(--bg);
            color: var(--text);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .topbar {
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            padding: 1rem 1.5rem;
        }

        .topbar-inner {
            max-width: 960px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .brand {
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--primary);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .nav-links a {
            color: var(--text);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            padding: 0.35rem 0.65rem;
            border-radius: 8px;
            transition: background-color 0.2s, color 0.2s;
        }

        .nav-links a:hover {
            background-color: var(--bg);
            color: var(--primary);
        }

        .container {
            width: 100%;
            max-width: 960px;
            margin: 2.5rem auto;
            padding: 0 1.25rem;
            flex: 1;
        }

        .auth-wrapper {
            max-width: 440px;
            margin: 1rem auto;
        }

        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 2rem;
            box-shadow: var(--shadow);
        }

        .card-header {
            margin-bottom: 1.5rem;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 0.25rem;
        }

        .card-subtitle {
            color: var(--muted);
            font-size: 0.92rem;
        }

        .form-group {
            margin-bottom: 1.15rem;
        }

        label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 0.4rem;
            color: var(--text);
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.7rem 0.85rem;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 0.95rem;
            color: var(--text);
            background: #fff;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.7rem 1.2rem;
            border: none;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.2s, transform 0.05s;
        }

        .btn:active {
            transform: translateY(1px);
        }

        .btn-primary {
            background-color: var(--primary);
            color: #fff;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
        }

        .btn-secondary {
            background-color: #e2e8f0;
            color: var(--text);
        }

        .btn-secondary:hover {
            background-color: #cbd5e1;
        }

        .btn-danger {
            background-color: var(--danger);
            color: #fff;
        }

        .btn-danger:hover {
            background-color: var(--danger-hover);
        }

        .alert {
            padding: 0.85rem 1rem;
            border-radius: 8px;
            margin-bottom: 1.25rem;
            font-size: 0.92rem;
        }

        .alert-success {
            background-color: var(--success-bg);
            color: var(--success-text);
            border: 1px solid #bbf7d0;
        }

        .alert-error {
            background-color: var(--error-bg);
            color: var(--error-text);
            border: 1px solid #fecaca;
        }

        .alert ul {
            padding-left: 1.2rem;
        }

        .auth-footer {
            margin-top: 1.25rem;
            text-align: center;
            font-size: 0.9rem;
            color: var(--muted);
        }

        .auth-footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }

        .info-list {
            list-style: none;
            margin: 1rem 0 1.5rem;
            border-top: 1px solid var(--border);
        }

        .info-list li {
            display: flex;
            justify-content: space-between;
            padding: 0.85rem 0;
            border-bottom: 1px solid var(--border);
            gap: 1rem;
            flex-wrap: wrap;
        }

        .info-label {
            color: var(--muted);
            font-weight: 500;
        }

        .actions-row {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex-wrap: wrap;
            margin-top: 1.25rem;
        }
    </style>
</head>
<body>
    <header class="topbar">
        <div class="topbar-inner">
            <a href="{{ route('home') }}" class="brand">Moura • Pur</a>
            <nav class="nav-links">
                <a href="{{ route('home') }}">Accueil</a>
                @auth
                    <a href="{{ route('pur.dashboard') }}">Dashboard</a>
                    <a href="{{ route('pur.profile') }}">Profil</a>
                    <form method="POST" action="{{ route('pur.logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger" style="padding: 0.45rem 0.85rem; font-size: 0.85rem;">
                            Déconnexion
                        </button>
                    </form>
                @else
                    <a href="{{ route('pur.login') }}">Connexion</a>
                    <a href="{{ route('pur.register') }}">Inscription</a>
                @endauth
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>