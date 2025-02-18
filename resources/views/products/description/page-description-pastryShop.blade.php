<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Pastry Selection</title>
    <style>
        
        .content-wrapper {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .site-header {
            background:rgb(212, 161, 50);
            color: #fff;
            padding: 20px 0;
            border-bottom: 3px solid rgb(0, 0, 0);
            text-align: center;
        }
        .site-header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .site-header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        .site-header ul {
            padding: 0;
            list-style: none;
            text-align: center;
        }
        .site-header li {
            display: inline;
            padding: 0 20px;
        }
        .product-info {
            background: #fff;
            padding: 30px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .product-info h2, .product-info h3 {
            color:rgb(238, 155, 0);
        }
        .product-info ul {
            padding: 0;
            list-style: none;
        }
        .product-info li {
            margin-bottom: 10px;
            font-size: 1.1em;
        }
        .product-info video {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
            border-radius: 5px;
        }
        .return-button {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background-color:rgb(167, 75, 0);
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
            font-size: 1em;
        }
    </style>
</head>
<body class="site-body">
    <header class="site-header">
        <div class="content-wrapper">
            <h1>Découvrez notre sélection de pâtisseries</h1>
        </div>
    </header>
    <div class="content-wrapper product-info">
        <h2>Bienvenue chez [Votre Pâtisserie] !</h2>
        <p>Nous offrons une large variété de pâtisseries de différentes marques, garantissant qualité et prix compétitifs. Notre sélection répond à tous les goûts et préférences.</p>
        <p>Nous nous engageons à fournir la meilleure expérience possible à nos clients. Notre objectif est de vous satisfaire en offrant des produits de haute qualité et un service client exceptionnel.</p>
        <h3>Nos caractéristiques :</h3>
        <ul class="features-list">
            <li><strong>Qualité garantie :</strong> Toutes nos pâtisseries respectent les normes de qualité les plus strictes pour garantir que vous obteniez le meilleur.</li>
            <li><strong>Livraison rapide et sécurisée :</strong> Nous offrons des services de livraison rapides et sécurisés pour que vos commandes arrivent à temps et en excellent état.</li>
            <li><strong>Expérience d'achat facile :</strong> Avec notre site web simple et convivial, vous pouvez faire vos achats en toute simplicité et commodité.</li>
            <li><strong>Offres et réductions exclusives :</strong> Profitez d'offres et de réductions exclusives sur diverses pâtisseries tout au long de l'année.</li>
        </ul>
        <h3>Pourquoi acheter chez nous :</h3>
        <p>Nous proposons des pâtisseries de haute qualité à des prix compétitifs.</p>
        <p>Notre service de livraison rapide garantit que les pâtisseries arrivent chez vous à temps et en parfait état.</p>
        <p>Nous nous engageons à votre satisfaction totale et offrons un service client exceptionnel pour vous aider dans tout ce dont vous avez besoin.</p>
        <h3>Vidéos supplémentaires :</h3>
        <video controls>
            <source src="patisserie1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls>
            <source src="patisserie2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls>
            <source src="patisserie3.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <a href="previous_page.html" class="return-button">Retour à la page précédente</a>
    </div>
</body>
</html>
