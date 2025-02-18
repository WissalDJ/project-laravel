@extends('layouts.app')

@section('title', 'Courier Profile')

@section('content')
<div class="containerc">
    <h1>Profile of {{ $courier->name }}</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <ul class="list-group mb-4">
        <li class="list-group-item"><strong>Partner ID:</strong> {{ $courier->partner_id }}</li>
        <li class="list-group-item"><strong>Name:</strong> {{ $courier->name }}</li>
        <li class="list-group-item"><strong>Prenom:</strong> {{ $courier->prenom }}</li>
        <li class="list-group-item"><strong>Tel:</strong> {{ $courier->tel }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $courier->email }}</li>
        <li class="list-group-item"><strong>Année d'expérience:</strong> {{ $courier->annee_experience }}</li>
    </ul>

    <a href="{{ route('couriers.edit', $courier->id) }}" class="btn btn-warning">Update Information</a>
    <a href="{{ route('couriers.index') }}" class="btn btn-secondary">Back to Couriers</a>

    <form action="{{ route('couriers.destroy', $courier->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this courier?');">Delete Account</button>
    </form>

    <hr>
</div>

<style>
    .containerc {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .containerc:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
        font-weight: bold;
        animation: fadeIn 1s ease;
    }

    .alert {
        text-align: center;
    }

    .list-group-item {
        border: none;
        padding: 10px 20px;
        margin-bottom: 10px;
        background-color: #f9f9f9;
        border-radius: 5px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .list-group-item:hover {
        background-color: #f1f1f1;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        margin-right: 10px;
        border: none;
        border-radius: 5px;
        color: #fff;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-warning {
        background-color: #f0ad4e;
    }

    .btn-warning:hover {
        background-color: #ec971f;
        transform: translateY(-2px);
    }

    .btn-secondary {
        background-color: #6c757d;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        transform: translateY(-2px);
    }

    .btn-danger {
        background-color:rgb(151, 81, 0);
    }

    .btn-danger:hover {
        background-color:rgb(241, 201, 140);
        transform: translateY(-2px);
    }

    hr {
        margin-top: 40px;
        border: 0;
        border-top: 1px solid #ddd;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
</style>
@endsection
