@extends('layouts.app')

@section('title', 'Welcome - TangoExpress')

@section('content')
<div class="content-text">
    <h1>Welcome to TangoExpress</h1>
    <p>Your reliable delivery service for meals, groceries, and more.</p>
</div>
<img src="{{ asset('images/tangoexpress.jpg') }}" alt="TangoExpress" />
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
                    <img src="{{ asset('images/' . $product['image']) }}" class="card-img-top" alt="{{ $product['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['title'] }}</h5>
                        <p class="card-text">
                            <span class="like-icon">❤️</span>
                            <span class="like-count">{{ $product['likes'] }}</span>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Section de services de livraison avec style inspiré -->
<div class="delivery-services">
    <div class="delivery-services-container">
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
