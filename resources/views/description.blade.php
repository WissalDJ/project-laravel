<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description du service</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Description du service : {{ ucfirst($service) }}</h1>

    @if ($service == 'patisserie')
        <img src="{{ asset('images/patissry.jpeg') }}" alt="Pâtisserie">
        <p>Découvrez nos délicieuses pâtisseries artisanales, préparées avec des ingrédients de qualité.</p>
    @elseif ($service == 'glacier')
        <img src="{{ asset('images/glacier.jpeg') }}" alt="Glacier">
        <p>Nos glaces artisanales sont faites maison avec des produits frais et naturels.</p>
    @elseif ($service == 'food')
        <img src="{{ asset('images/food.jpg') }}" alt="Food">
        <p>Explorez notre menu varié avec des plats savoureux pour tous les goûts.</p>
    @else
        <p>Service non disponible.</p>
    @endif

    <br>
    <a href="{{ url('/') }}">Retour à l'accueil</a>
</body>
</html>
