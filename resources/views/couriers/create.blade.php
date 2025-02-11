@extends('layouts.app')

@section('title', 'Create Courier')

@section('content')
<div class="container">
    <h1>Create Courier</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('couriers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="partner_id" class="form-label">Partner ID</label>
            <input type="text" name="partner_id" class="form-control" id="partner_id" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" required>
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">Tel</label>
            <input type="text" name="tel" class="form-control" id="tel" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="annee_experience" class="form-label">Année d'expérience</label>
            <input type="number" name="annee_experience" class="form-control" id="annee_experience" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('couriers.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
