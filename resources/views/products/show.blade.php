@extends('layouts.app')

@section('title', $product->name . ' - TangoExpress')

@section('content')


<div class="container1">

<!-- Filter Menu -->


    <!-- Détails du produit -->
    <div class="product-details">
        <img src="{{ asset('images/' . $product->image) }}" alt="">
        <p><strong>name:</strong> {{ $product->name }}</p>
        <p><strong>Price:</strong> ${{ $product->price }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Category:</strong> {{ $product->category }}</p>
    </div>

    <!-- Détails du partenaire -->
    <div class="partner-details">
        <h2>Partner Information</h2>
        <img src="{{ asset('storage/' . $partner->imagmenu) }}" alt="{{ $partner->nomEntreprise }}" class="partner-logo">
        <p><strong>Company Name:</strong> {{ $partner->nomEntreprise }}</p>
        <p><strong>Contact:</strong> {{ $partner->tel }} | {{ $partner->email }}</p>
        <p><strong>Address:</strong> {{ $partner->adrees }}</p>
    </div>

    <!-- Similar Products Section -->
    <div class="similar-products">
        <h2>Similar Products</h2>
        <div class="row">
            @foreach ($similarProducts as $similarProduct)
                <div class="card">
                    <a href="{{ route('products.show', $similarProduct->id) }}">
                        <img src="{{ asset('images/' . $similarProduct->image) }}" class="card-img-top" alt="{{ $similarProduct->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $similarProduct->name }}</h5>
                            <p class="card-text">
                                <span class="price-tag">{{ $similarProduct->price }}</span>
                                <span class="like-icon">{{ $similarProduct->category }}</span>
                                <span class="like-count">{{ $similarProduct->likes }} ❤</span>
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection