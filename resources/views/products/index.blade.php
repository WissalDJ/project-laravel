@extends('layouts.app')

@section('title', 'Welcome - TangoExpress')

@section('content')
<div class="content-text">
    <h1>Welcome to TanGoExpress</h1><br>
    <div class="content-1">
       <div class="text-boutton"> 
        <p class="right-text">Chez TanGoExpress, nous comprenons que votre temps est précieux. C'est pourquoi nous avons simplifié le processus de commande pour qu'il soit aussi rapide et facile que possible. En un seul clic, vous pouvez passer votre commande, que ce soit pour un repas, des courses ou tout autre besoin. Notre plateforme intuitive vous permet de naviguer facilement et de trouver ce dont vous avez besoin sans tracas inutiles.
         Nous sommes fiers de notre capacité à livrer vos commandes en un temps record. Grâce à notre réseau de livreurs professionnels et à notre technologie de pointe, nous pouvons garantir que vos achats arrivent à votre porte rapidement et en toute sécurité. Que vous soyez chez vous, au bureau ou ailleurs dans Tanger, notre service de livraison rapide et fiable est toujours à votre disposition.</p><br>
        <button class="order-button">Order Now</button></div>
        <img src="{{ asset('images/tangoexpress.jpg') }}" alt="TangoExpress" class="left-image" />
    </div><br><br>
<div class="categories">
    <div class="category">
        <a href="/patissry">
            <img src="{{ asset('images/patissry.jpeg') }}" alt="Pâtisserie" />
            <div class="category-title">Pâtisserie</div>
        </a>
    </div>
    <div class="category">
        <a href="/glacier">
            <img src="{{ asset('images/glacier.jpeg') }}" alt="Glacier" />
            <div class="category-title">Glacier</div>
        </a>
    </div>
    <div class="category">
        <a href="/food">
            <img src="{{ asset('images/food.jpg') }}" alt="Food" />
            <div class="category-title">Food</div>
        </a>
    </div>
</div>

<h1>Our Partner</h1>
<div class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <a href="{{ route('products.show', $product->id) }}">
                        <img src="{{ asset('images/glacier.jpeg') }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p>{{$product->category}}</p>
                            <p class="card-text">
                                <span class="like-icon">❤️</span>
                                <span class="like-count">{{ $product->likes }}</span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
{{-- //formulaire --}}
<div class="container-button">
    <div class="opportunity">
        <img src="{{ asset('images/tangoexpress.jpg') }}" alt="Devenir coursier">
        <h2>Devenir coursier</h2>
        <p>C'est vous le chef ! Livrez avec Glovo pour gagner des revenus compétitifs en toute flexibilité et liberté.</p>
        <button>Inscription</button>
    </div>
    <div class="opportunity">
        <img src="{{ asset('images/tangoexpress.jpg') }}" alt="Devenir partenaire">
        <h2>Devenir partenaire</h2>
        <p>Grandissez avec Glovo ! Boostez les ventes et accédez à de nouvelles opportunités grâce à notre technologie et à notre base d'utilisateurs !</p>
        <button><a href="{{ route('partners.create') }}">Inscription</a></button>
    </div>
    <div class="opportunity">
        <img src="{{ asset('images/tangoexpress.jpg') }}" alt="Emploi">
        <h2>Emploi</h2>
        <p>Vous cherchez un nouveau défi ? Si vous faites preuve d'ambition et d'humilité et aimez travailler en équipe, contactez-nous !</p>
        <button>Inscription</button>
    </div>
</div>
<a href="{{ route('partners.create') }}">partenir</a><!-- Section de services de livraison avec style inspiré -->
<!-- Section de services de livraison avec style inspiré -->
<div class="delivery-services">
    <div class="deliveryservices">
        <h2>Our Delivery Services</h2>
        <div class="delivery-content">
            <div class="delivery-img-container">
                <img src="{{ asset('images/livraison.png') }}" alt="Delivery Service" class="delivery-img">
            </div>
            <div class="delivery-text">
                <h3>Fast and Reliable Delivery</h3>
                <p>We ensure your orders are delivered swiftly and securely, providing the best service for your convenience.</p>
            </div>
        </div>
    </div>
</div>
@endsection
