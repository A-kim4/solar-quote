<!DOCTYPE html>
<html lang="fr">

<head>

    <head>
        <meta charset="UTF-8">
        <title>Créer un devis solaire</title>
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
        <span>
            Générateur de Devis Solaire
        </span>
    </h2>

    <form class="creat-form" method="POST" action="{{ route('quotes.store') }}">
        @csrf

        <div class="form-group">
            <label>Nom du client</label>
            <input type="text" name="client_name" required>
        </div>

        <div class="form-group">
            <label>Lieu d'installation</label>
            <input type="text" name="location" required>
        </div>

        <div class="form-group">
            <label>Type d'installation</label>
            <select name="type" required>
                <option value="Résidentiel">Résidentiel</option>
                <option value="Agricole">Agricole</option>
                <option value="Industriel">Industriel</option>
            </select>
        </div>

        <div class="form">
            <label>Surface disponible (en m²)</label>
            <input type="number" step="0.01" name="surface">
        </div>

        <div class="form-group">
            <label>OU Puissance souhaitée (en kW)</label>
            <input type="number" step="0.01" name="power_requested">
        </div>

        <div class="form-group">
            <label>Utilisation prévue</label>
            <textarea name="usage" rows="3"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn">
                Générer le devis
            </button>
        </div>
    </form>
</body>

</html>