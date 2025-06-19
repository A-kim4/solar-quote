<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Devis - {{ $quote->client_name }}</title>
</head>
<body>

    <header>
        <h2>
            <span>Devis Solaire</span>
        </h2>
    </header>

    <div class="info-client">
        <p><strong>Client :</strong> {{ $quote->client_name }}</p>
        <p><strong>Lieu d'installation :</strong> {{ $quote->location }}</p>
        <p><strong>Type d'installation :</strong> {{ $quote->type }}</p>
        <p><strong>Utilisation prévue :</strong> {{ $quote->usage }}</p>
        <p><strong>Date :</strong> {{ now()->format('d/m/Y') }}</p>
    </div>

    <table>
        <tr>
            <th>Élément</th>
            <th>Détail</th>
        </tr>
        <tr>
            <td>Nombre de panneaux</td>
            <td>{{ $quote->panel_count }}</td>
        </tr>
        <tr>
            <td>Puissance totale</td>
            <td>{{ $quote->total_power }} kW</td>
        </tr>
        <tr>
            <td>Surface requise</td>
            <td>{{ $quote->surface_required }} m²</td>
        </tr>
        <tr>
            <td>Prix HT</td>
            <td>{{ number_format($quote->price_ht, 2, ',', ' ') }} €</td>
        </tr>
        <tr class="total">
            <td>Prix TTC</td>
            <td>{{ number_format($quote->price_ttc, 2, ',', ' ') }} €</td>
        </tr>
    </table>

</body>
</html>
