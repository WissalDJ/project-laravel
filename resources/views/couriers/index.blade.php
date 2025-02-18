@extends('layouts.app')

@section('title', 'Couriers')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Our Couriers</h1>
    <div class="text-center mb-4">
        <a href="{{ route('courier.profile') }}" class="btn btn-primary">Mon Profil</a>
    </div>

    @if ($couriers->count())
        <div class="row">
            @foreach ($couriers as $courier)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary">{{ $courier->name }}</h5>
                            <p class="card-text"><strong>Partner:</strong> {{ $courier->partner->name }}</p>
                            <p class="card-text"><strong>Email:</strong> {{ $courier->email }}</p>
                            <p class="card-text"><strong>Tel:</strong> {{ $courier->tel }}</p>
                            <p class="card-text"><strong>Experience:</strong> {{ $courier->annee_experience }} years</p>
                            <p class="card-text"><strong>Vehicle Type:</strong> {{ $courier->vehicle_type }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $couriers->links() }}
    @else
        <p class="text-center">No couriers found.</p>
    @endif
</div>

<style>
.container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
    font-weight: bold;
    font-size: 2.5rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
}

.card-title {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: #007bff;
}

.card-text {
    margin-bottom: 10px;
}

.btn {
    margin: 0 10px;
}

@media (max-width: 768px) {
    .card {
        margin-bottom: 20px;
    }
}
</style>
@endsection