@extends('layouts.app')

@section('title', 'Create Partner')

@section('content')
<div class="container">
    <h1>Create Partner</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
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
            <label for="modepass" class="form-label">Password</label>
            <input type="password" name="modepass" class="form-control" id="modepass" required>
        </div>
        <div class="mb-3">
            <label for="nomEntreprise" class="form-label">Company Name</label>
            <input type="text" name="nomEntreprise" class="form-control" id="nomEntreprise" required>
        </div>
        <div class="mb-3">
            <label for="adrees" class="form-label">Address</label>
            <input type="text" name="adrees" class="form-control" id="adrees" required>
        </div>
        <div class="mb-3">
            <label for="imagmenu" class="form-label">Company Logo</label>
            <input type="file" name="imagmenu" class="form-control" id="imagmenu" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('products.index') }}">rollback</a>
    </form>
</div>
@endsection
