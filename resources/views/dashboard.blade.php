<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Breeze</title>
    <style>
        :root {
            --bg: #f1f5f9;
            --surface: #ffffff;
            --text: #0f172a;
            --muted: #64748b;
            --primary: #2563eb;
            --secondary-bg: #f8fafc;
            --secondary-border: #cbd5e1;
            --danger: #dc2626;
            --danger-hover: #b91c1c;
            --border: #e2e8f0;
            --radius: 14px;
            --shadow: 0 12px 28px -6px rgba(15, 23, 42, 0.08), 0 4px 12px -4px rgba(15, 23, 42, 0.04);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Segoe UI", system-ui, -apple-system, Roboto, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
            min-height: 100vh;
        }

        .navbar {
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            padding: 0.9rem 1.5rem;
        }

        .navbar-inner {
            max-width: 920px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .brand {
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--primary);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .badge {
            background: #eef2ff;
            color: #4338ca;
            border: 1px solid #c7d2fe;
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.15rem 0.55rem;
            border-radius: 999px;
        }

        .container {
            max-width: 920px;
            margin: 2.25rem auto;
            padding: 0 1.25rem;
        }

        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 2rem;
            box-shadow: var(--shadow);
        }

        .card-header {
            padding-bottom: 1.25rem;
            border-bottom: 1px solid var(--border);
            margin-bottom: 1.5rem;
        }

        .card-title {
            font-size: 1.55rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            margin-bottom: 0.3rem;
        }

        .card-subtitle {
            color: var(--muted);
            font-size: 0.98rem;
        }

        .card-subtitle strong {
            color: var(--text);
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex-wrap: wrap;
            margin-top: 1.5rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.65rem 1.15rem;
            border-radius: 9px;
            font-size: 0.92rem;
            font-weight: 600;
            text-decoration: none;
            border: 1px solid transparent;
            cursor: pointer;
            transition: all 0.18s ease;
        }

        .btn-outline {
            background: var(--secondary-bg);
            color: var(--text);
            border-color: var(--secondary-border);
        }

        .btn-outline:hover {
            background: #e2e8f0;
            border-color: #94a3b8;
        }

        .btn-danger {
            background: var(--danger);
            color: #ffffff;
        }

        .btn-danger:hover {
            background: var(--danger-hover);
        }
    </style>
</head>
<body>
    <header class="navbar">
        <div class="navbar-inner">
            <a href="{{ url('/') }}" class="brand">
                <span>Espace Breeze</span>
                <span class="badge">Laravel Breeze</span>
            </a>
        </div>
    </header>

    <main class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Tableau de bord</h1>
                <p class="card-subtitle">
                    Bienvenue, <strong>{{ auth()->user()->name }}</strong> ({{ auth()->user()->email }}).
                </p>
            </div>

            <p>Vous êtes connecté via le système Laravel Breeze.</p>

            <div class="actions">
                <a href="{{ url('/breeze/profile') }}" class="btn btn-outline">Mon profil Breeze</a>
                <a href="{{ url('/') }}" class="btn btn-outline">Retour à l'accueil</a>

                <form method="POST" action="/breeze/logout">
                    @csrf
                    <button type="submit" class="btn btn-danger">Déconnexion</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>