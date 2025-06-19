<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des devis</title>
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

    <h2> Liste des devis</h2>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Client</th>
                <th>Lieu</th>
                <th>Type</th>
                <th>Utilisation</th>
                <th>Puissance (kW)</th>
                <th>Prix TTC (€)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($quotes as $quote)
            <tr>
                <td>{{ $quote->id }}</td>
                <td>{{ $quote->client_name }}</td>
                <td>{{ $quote->location }}</td>
                <td>{{ $quote->type }}</td>
                <td>{{ $quote->usage }}</td>
                <td>{{ $quote->total_power }}</td>
                <td>{{ number_format($quote->price_ttc, 2, ',', ' ') }}</td>
                <td>
                    <a href="{{ route('quotes.show', $quote) }}" class="btn-action">Voir PDF</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" style="text-align: center;">Aucun devis trouvé.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
                    
</body>

</html>