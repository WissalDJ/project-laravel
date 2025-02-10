@extends('layouts.app')

@section('title', 'Our Partner - TangoExpress')

@section('content')
<h1>Our Partner</h1>
<div class="product-list">
    <h2>Products</h2>
    <ul>
        <li>
            <img src="{{ asset('images/patissry.jpeg') }}" alt="Product 1" class="product-img" />
            <h3>Product 1</h3>
            <div class="likes">
                <span class="like-icon">❤️</span>
                <span class="like-count">120</span>
            </div>
        </li>
        <li>
            <img src="{{ asset('images/food.jpg') }}" alt="Product 2" class="product-img" />
            <h3>Product 2</h3>
            <div class="likes">
                <span class="like-icon">❤️</span>
                <span class="like-count">85</span>
            </div>
        </li>
        <li>
            <img src="{{ asset('images/glacier.jpeg') }}" alt="Product 3" class="product-img" />
            <h3>Product 3</h3>
            <div class="likes">
                <span class="like-icon">❤️</span>
                <span class="like-count">150</span>
            </div>
        </li>
    </ul>
</div>
@endsection
