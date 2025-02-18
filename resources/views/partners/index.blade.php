@extends('layouts.app')

@section('title', 'Partners')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Our Partners</h1>

    @if ($partners->count())
        <div class="row">
            @foreach ($partners as $partner)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                        <img src="{{ asset('images/' . $partner->imagmenu) }}" class="card-img-top" alt="Company Logo">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary">{{ $partner->name }}</h5>
                            <p class="card-text"><strong>Email:</strong> {{ $partner->email }}</p>
                            <p class="card-text"><strong>Company Name:</strong> {{ $partner->nomEntreprise }}</p>
                            <p class="card-text"><strong>Address:</strong> {{ $partner->adrees }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('partners.pdf') }}" class="btn btn-primary">
                <i class="fas fa-download"></i> Download Partners Report
            </a>
            <a href="{{ route('partners.export') }}" class="btn btn-success">Export to Excel</a>
        </div>

        {{ $partners->links() }}
    @else
        <p class="text-center">No partners found.</p>
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

.card-img-top {
    height: 200px; /* Set a fixed height for uniformity */
    object-fit: cover; /* Ensure the image covers the area */
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