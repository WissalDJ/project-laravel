@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Votre Panier</h1>

    @if(session('cart') && count(session('cart')) > 0)
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $id => $item)
                    <tr>
                        <td class="align-middle">
                            <img src="{{ asset('images/' . $item['image']) }}" width="50" alt="{{ $item['name'] }}" class="img-thumbnail mr-2">
                            {{ $item['name'] }}
                        </td>
                        <td class="align-middle">{{ $item['price'] }} DH</td>
                        <td class="align-middle">
                            <form action="{{ route('orders.update', $id) }}" method="POST" class="d-inline">
                                @csrf
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" max="99" required class="form-control d-inline-block w-25">
                                <button type="submit" class="btn btn-sm btn-success ml-2">Mettre à jour</button>
                            </form>
                        </td>
                        <td class="align-middle">{{ $item['price'] * $item['quantity'] }} DH</td>
                        <td class="align-middle">
                            <a href="{{ route('orders.remove', $id) }}" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3 class="text-right">Total: {{ $total }} DH</h3>

            <button type="submit" class="btn btn-primary"><a href="{{ route('orders.gotoproducts') }}" class="btn btn-primary">Back</a>
            </button>
       
    @else
        <p class="text-center">Votre panier est vide.</p>
    @endif
</div>
<style>
.container {
    max-width: 1200px;
    margin: auto;
}

h1 {
    font-family: 'Arial', sans-serif;
    font-weight: bold;
    color: #f17030;
}

.table {
    border-collapse: collapse;
    width: 100%;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.table thead {
    background-color: #3e2723;
    color: #fff;
}

.table thead th {
    padding: 15px;
    text-align: left;
    color: white

}

.table tbody tr {
    background-color:rgb(247, 196, 145);
    border-bottom: 1px solid #8d6e63;
}

.table td, .table th {
    padding: 15px;
    text-align: left;
    color: #52280c;
}

.table td img {
    border-radius: 5px;
}

.form-control {
    display: inline-block;
    width: auto;
    margin-right: 10px;
}

.btn-success {
    background-color:rgb(199, 82, 4);
    border-color:rgb(0, 0, 0);
    transition: background-color 0.3s ease;
}

.btn-danger {
    background-color:rgb(0, 0, 0);
    border-color: #d32f2f;
    transition: background-color 0.3s ease;
}

.btn-primary {
    background-color:rgb(150, 133, 86);
    border-color:rgb(214, 41, 41);
    transition: background-color 0.3s ease;
}

.btn-sm {
    padding: 5px 10px;
    color: #f8f5f3
}

.btn-success:hover, .btn-danger:hover, .btn-primary:hover {
    background-color:rgb(214, 192, 192);
    color: #3e2723;
}

.text-right {
    text-align: right;
}

.text-center {
    text-align: center;
}

.text-center p {
    font-family: 'Arial', sans-serif;
    color: #8d6e63;
}
</style>

@endsection
