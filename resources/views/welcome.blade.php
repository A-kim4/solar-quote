<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil - Générateur de devis solaires</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <style>

    </style>
</head>
<body>

    <div class="navbar">
        <div><strong> SolarQuote</strong></div>
        <div>
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('quotes.create') }}">Créer un devis</a>
            <a href="{{ route('quotes.index') }}">Voir les devis</a>
        </div>
    </div>

    <div class="container">
        <h1>Bienvenue sur l’outil de génération de devis solaires</h1>
        <p>Créez rapidement des devis professionnels pour vos clients</p>

        <div class="actions">
            <a href="{{ route('quotes.create') }}"> Nouveau devis</a>
            <a href="{{ route('quotes.index') }}"> Tous les devis</a>
        </div>
    </div>

</body>
</html>
