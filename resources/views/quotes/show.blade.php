<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Devis généré</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
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

    <h2>
        <span>Devis généré avec succès</span>
    </h2>

    <div class="card">
        <p><strong>Client :</strong> {{ $quote->client_name }}</p>
        <p><strong>Lieu d'installation :</strong> {{ $quote->location }}</p>
        <p><strong>Type :</strong> {{ $quote->type }}</p>
        <p><strong>Utilisation prévue :</strong> {{ $quote->usage }}</p>
        <p><strong>Puissance totale :</strong> {{ $quote->total_power }} kW</p>
        <p><strong>Nombre de panneaux :</strong> {{ $quote->panel_count }}</p>
        <p><strong>Surface requise :</strong> {{ $quote->surface_required }} m²</p>
        <p><strong>Prix HT :</strong> {{ number_format($quote->price_ht, 2, ',', ' ') }} €</p>
        <p><strong>Prix TTC :</strong> {{ number_format($quote->price_ttc, 2, ',', ' ') }} €</p>

        <div class="form-group">
            <button class="btn">
                <a href="{{ route('quotes.pdf', $quote) }}">
                    Télécharger le devis PDF
                </a>
            </button>
        </div>

    </div>

</body>

</html>