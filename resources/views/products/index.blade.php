@extends('layouts.app')
@section('title', 'Welcome - TangoExpress')
@section('content')

<!-- En-tête -->
<div class="content-text">
    <h1 class="titre">Welcome to TanGoExpress</h1><br>
    <div class="content-1">
        <div class="text-boutton"> 
            <p class="right-text">Chez TanGoExpress, nous simplifions le processus de commande pour le rendre rapide et facile. En un clic, vous pouvez commander des repas, des courses ou d'autres besoins grâce à notre plateforme intuitive. Nous garantissons une livraison rapide et sécurisée grâce à notre réseau de livreurs professionnels et à notre technologie avancée, que vous soyez chez vous, au bureau ou ailleurs à Tanger.</p><br>
            <button class="order-button">Order Now</button>
        </div><br>
        <img src="{{ asset('images/tangoexpress.jpg') }}" alt="TangoExpress" class="left-image" />
    </div><br>
</div>

<!-- Comment ça marche -->
<div class="how-it-works">
    <h1 class="titre">Comment ça marche</h1>
    <p>Commandez en 3 étapes sans aucun frais supplémentaire</p>
    
    <div class="step">
        <div class="icon">
            <img src="{{ asset('images/localize-icon.jpeg') }}" alt="Localisez-vous">
        </div>
        <h2 class="titr1">Localisez-vous</h2>
        <p>Choisissez votre ville et votre quartier</p>
    </div>
    
    <div class="step">
        <div class="icon">   
            <img src="{{ asset('images/choose-dish-icon.jpeg') }}" alt="Choisissez votre plat">
        </div>
        <h2>Choisissez votre plat</h2>
        <p>Sélectionnez le plat qui vous convient</p>
    </div>
    
    <div class="step">
        <div class="icon">
            <img src="{{ asset('images/order-icon.jpeg') }}" alt="Passez votre commande">
        </div>
        <h2>Passez votre commande</h2>
        <p>Commandez votre repas en ligne</p>
    </div>
</div><br><br>

<!-- Catégories -->
<div class="categories">
    <div class="category">
        <a href="{{ route('produits.page-description-pastryShop', ['id' => 1]) }}">
            <img src="{{ asset('images/patissry.jpg') }}" alt="Pâtisserie" />
            <div class="category-title">Pâtisserie</div>
            <div class="category-description">Pâtisseries faites maison avec amour.</div>
        </a>
    </div>
    
    <div class="category">
        <a href="{{ route('produits.page-description-glacier', ['id' => 1]) }}">
            <img src="{{ asset('images/glacier.jpg') }}" alt="Glacier" />
            <div class="category-title">Glacier</div>
            <div class="category-description">Glaces artisanales aux saveurs uniques.</div>
        </a>
    </div>
    
    <div class="category">
        <a href="{{ route('produits.page-description-food', ['id' => 1]) }}">
            <img src="{{ asset('images/food.jpg') }}" alt="Food" />
            <div class="category-title">Food</div>
            <div class="category-description">Plats délicieux préparés avec soin.</div>
        </a>
    </div>
</div><br><br>

<!-- Partenaires -->
<h1 class="titre">Our Partner</h1>
<div class="filter-menu">
    <form action="{{ route('products.index') }}" method="GET">
        <select name="category" id="category">
            <option value="">All Categories</option>
            @foreach($categories as $category)
                <option value="{{ $category }}">{{ ucfirst($category) }}</option>
            @endforeach
        </select>
        <button type="submit">Filter</button>
    </form>
</div><br><br>

<!-- Produits -->
<div class="containerCarde">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-6 col-md-4 col-lg-4 card-item">
                <div class="card">
                    <a href="{{ route('products.show', $product->id) }}">
                        <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p>{{ $product->category }}</p>
                            <p class="card-text">
                                <span class="price-tag">{{ $product->price }} DH</span>
                            </p>
                        </div>
                    </a> 
                    <a href="{{ route('orders.add', $product->id) }}" class="favorite-btn">❤ Add to Cart</a>               
                </div>
            </div>
        @endforeach
    </div>
</div><br><br>

<!-- Opportunités -->
<div class="container-button">
    <div class="opportunity">
        <img src="{{ asset('images/partenaire.jpeg') }}" alt="Devenir coursier">
        <h2>Devenir coursier</h2>
        <p>C'est vous le chef ! Livrez avec TanGoExpresse pour gagner des revenus compétitifs en toute flexibilité et liberté.</p>
        <button><a href="{{ route('couriers.create') }}">Inscription</a></button>
    </div>
    
    <div class="opportunity">
        <img src="{{ asset('images/partenaire.jpeg') }}" alt="Devenir partenaire">
        <h2>Devenir partenaire</h2>
        <p>Grandissez avec TanGoExpresse ! Boostez les ventes et accédez à de nouvelles opportunités grâce à notre technologie et à notre base d'utilisateurs !</p>
        <button><a href="{{ route('partners.create') }}">Inscription</a></button>
    </div>
    
    <div class="opportunity">
        <img src="{{ asset('images/partenaire.jpeg') }}" alt="Emploi">
        <h2>contactez-nous</h2>
        <p>Vous cherchez un nouveau défi ? Si vous faites preuve d'ambition et d'humilité et aimez travailler en équipe, contactez-nous !</p>
        <button><a href="{{ route('contact') }}">Contact</a></button>
    </div>
</div><br><br>

<!-- Services de livraison -->
<div>
    <h2 class="titre">Our Delivery Services</h2>
    <div class="delivery-content">
        <div class="delivery-img-container">
            <img src="{{ asset('images/express_delivery.jpeg') }}" alt="Express Delivery" class="delivery-img">
        </div>
        <div class="delivery-text">
            <h3>Express Delivery</h3>
            <p>For those urgent needs, our express delivery service guarantees that your items arrive in record time. We ensure your orders are delivered swiftly and securely, providing the best service for your convenience. Stay updated with our real-time tracking feature, ensuring you know the exact status of your delivery at all times. Our dedicated customer support team is available 24/7 to assist you with any queries or concerns you may have.</p>        </div>
    </div>
</div>

@endsection
