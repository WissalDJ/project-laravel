
<!--hada li 3awt 1-->

@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
<div class="cont">
    <div class="container2">
        <h1>Edit Profile</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('partners.profile.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $partner->name) }}" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" name="prenom" class="form-control" id="prenom" value="{{ old('prenom', $partner->prenom) }}" required>
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">Tel</label>
                <input type="text" name="tel" class="form-control" id="tel" value="{{ old('tel', $partner->tel) }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $partner->email) }}" required>
            </div>
            <div class="mb-3">
                <label for="nomEntreprise" class="form-label">Company Name</label>
                <input type="text" name="nomEntreprise" class="form-control" id="nomEntreprise" value="{{ old('nomEntreprise', $partner->nomEntreprise) }}" required>
            </div>
            <div class="mb-3">
                <label for="adrees" class="form-label">Address</label>
                <input type="text" name="adrees" class="form-control" id="adrees" value="{{ old('adrees', $partner->adrees) }}" required>
            </div>
            <div class="mb-3">
                <label for="imagmenu" class="form-label">Company Logo</label>
                <input type="file" name="imagmenu" class="form-control" id="imagmenu">
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
            <a href="{{ route('partners.profile', $partner->id) }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
