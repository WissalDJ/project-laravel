// show.blade.php
@extends('layouts.app')

@section('title', 'Courier Profile')

@section('content')
<div class="container">
    <h1>{{ $courier->name }}'s Profile</h1>
    <p><strong>Prenom:</strong> {{ $courier->prenom }}</p>
    <p><strong>Tel:</strong> {{ $courier->tel }}</p>
    <p><strong>Email:</strong> {{ $courier->email }}</p>
    <p><strong>Years of Experience:</strong> {{ $courier->annee_experience }}</p>
    <p><strong>Vehicle Type:</strong> {{ $courier->vehicle_type }}</p>
    @if ($courier->profile_photo)
        <div class="mt-3 mb-3">
            <img src="{{ Storage::url($courier->profile_photo) }}" alt="Profile Photo" class="img-fluid" style="max-width: 300px">
        </div>
    @endif
    <div class="mt-3">
        <a href="{{ route('couriers.edit', $courier->id) }}" class="btn btn-warning">Edit Profile</a>
        <a href="{{ route('couriers.index') }}" class="btn btn-secondary">Back to Couriers</a>
        <form action="{{ route('couriers.destroy', $courier->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection