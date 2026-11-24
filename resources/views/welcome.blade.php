<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Projet Authentification Laravel</title>
    <style>
        body { font-family: Inter, Arial, sans-serif; background: #f4f6f9; color: #0f172a; margin: 0; min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px; }
        .container { max-width: 720px; width: 100%; background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 36px; box-shadow: 0 12px 30px -10px rgba(15, 23, 42, 0.08); }
        h1 { margin: 0 0 8px; font-size: 1.6rem; }
        p { color: #475569; margin: 0 0 28px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 18px; }
        .box { border: 1px solid #e2e8f0; border-radius: 12px; padding: 22px; background: #f9fafb; }
        .box h2 { margin: 0 0 8px; font-size: 1.15rem; }
        .box p { font-size: 0.9rem; margin-bottom: 18px; }
        .btn { display: inline-block; padding: 10px 16px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 0.9rem; }
        .btn-pur { background: #2563eb; color: #fff; }
        .btn-breeze { background: #0f172a; color: #fff; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mini-Projet : Authentification Laravel</h1>
        <p>Choisissez l'implémentation à tester (les deux partagent la même base de données utilisateurs).</p>

        <div class="grid">
            <div class="box">
                <h2>Partie 1 : Laravel Pur</h2>
                <p>Authentification manuelle avec contrôleurs, sessions, Hash::make() et Auth::attempt().</p>
                <a href="{{ route('pur.login') }}" class="btn btn-pur">Ouvrir Laravel Pur</a>
            </div>

            <div class="box">
                <h2>Partie 2 : Laravel Breeze</h2>
                <p>Authentification complète via le starter kit officiel Laravel Breeze.</p>
                <a href="/breeze/login" class="btn btn-breeze">Ouvrir Laravel Breeze</a>
            </div>
        </div>
    </div>
</body>
</html>