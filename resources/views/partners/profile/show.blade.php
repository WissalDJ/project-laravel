<!--hadi 2 li eadlt -->

@extends('layouts.app')

@section('title', 'Partner Profile')

@section('content')
<div class="profile-container">
    <h1 class="profile-heading">{{ $partner->name }}'s Profile</h1>
    <p class="profile-info"><strong>Prenom:</strong> {{ $partner->prenom }}</p>
    <p class="profile-info"><strong>Tel:</strong> {{ $partner->tel }}</p>
    <p class="profile-info"><strong>Email:</strong> {{ $partner->email }}</p>
    <p class="profile-info"><strong>Company Name:</strong> {{ $partner->nomEntreprise }}</p>
    <p class="profile-info"><strong>Address:</strong> {{ $partner->adrees }}</p>
    <img src="{{ asset($partner->imagmenu) }}" alt="Company Logo" class="company-logo">
   
    <div class="action-buttons">
        <a href="{{ route('partners.profile.edit', $partner->id) }}" class="btn btn-warning">Edit Profile</a>
        <a href="{{ route('partners.index') }}" class="btn btn-secondary">Back to Partners</a>
        <form action="{{ route('partners.destroy', $partner->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        
    </div>
    
</div>

<style>
    .profile-container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .profile-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    
    .profile-heading {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
        animation: fadeIn 1s ease;
    }
    
    .profile-info {
        margin-bottom: 10px;
        color: #555;
        font-size: 1.1em;
    }
    
    .company-logo {
        display: block;
        max-width: 100%;
        margin: 20px auto;
        border-radius: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    
    .action-buttons {
        text-align: center;
        margin-top: 20px;
    }
    
    .btn {
        margin: 5px;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.1s ease;
    }
    
    .btn-warning:hover {
        background-color: #e0a800;
    }
    
    .btn-secondary:hover {
        background-color: #6c757d;
    }
    
    .btn-danger:hover {
        background-color: #c82333;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
</style>
@endsection
