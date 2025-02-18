// edit.blade.php
@extends('layouts.app')

@section('title', 'Edit Courier')

@section('content')
<div class="container">
    <h1>Edit Courier</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('couriers.update', $courier->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="partner_id" class="form-label">Partner</label>
            <select name="partner_id" class="form-control" id="partner_id" required>
                <option value="">Select Partner</option>
                @foreach($partners as $partner)
                    <option value="{{ $partner->id }}" {{ $courier->partner_id == $partner->id ? 'selected' : '' }}>
                        {{ $partner->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $courier->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" value="{{ old('prenom', $courier->prenom) }}" required>
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">Tel</label>
            <input type="text" name="tel" class="form-control" id="tel" value="{{ old('tel', $courier->tel) }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $courier->email) }}" required>
        </div>
        <div class="mb-3">
            <label for="annee_experience" class="form-label">Years of Experience</label>
            <input type="number" name="annee_experience" class="form-control" id="annee_experience" value="{{ old('annee_experience', $courier->annee_experience) }}" required>
        </div>
        <div class="mb-3">
            <label for="vehicle_type" class="form-label">Vehicle Type</label>
            <input type="text" name="vehicle_type" class="form-control" id="vehicle_type" value="{{ old('vehicle_type', $courier->vehicle_type) }}" required>
        </div>
        <div class="mb-3">
            <label for="profile_photo" class="form-label">Profile Photo</label>
            <input type="file" name="profile_photo" class="form-control" id="profile_photo">
            @if($courier->profile_photo)
                <img src="{{ Storage::url($courier->profile_photo) }}" alt="Current Profile Photo" class="mt-2" style="max-width: 200px">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('couriers.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection