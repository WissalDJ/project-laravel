@extends('layouts.app')

@section('title', $product->name . ' - TangoExpress')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <div class="product-details">
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
        <p><strong>Price:</strong> ${{ $product->price }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Category:</strong> {{ $product->category }}</p>
    </div>

    <div class="partner-details">
        <h2>Partner Information</h2>
        <img src="{{ asset('storage/' . $partner->imagmenu) }}" alt="{{ $partner->nomEntreprise }}" class="partner-logo">
        <p><strong>Company Name:</strong> {{ $partner->nomEntreprise }}</p>
        <p><strong>Contact:</strong> {{ $partner->tel }} | {{ $partner->email }}</p>
        <p><strong>Address:</strong> {{ $partner->adrees }}</p>
    </div>
</div>
@endsection
