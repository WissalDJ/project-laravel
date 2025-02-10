@extends('layouts.app')

@section('title', 'Partners List')

@section('content')
<div class="container">
    <h1>Partners List</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Prenom</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Company Name</th>
                <th>Address</th>
                <th>Logo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partners as $partner)
                <tr>
                    <td>{{ $partner->name }}</td>
                    <td>{{ $partner->prenom }}</td>
                    <td>{{ $partner->tel }}</td>
                    <td>{{ $partner->email }}</td>
                    <td>{{ $partner->nomEntreprise }}</td>
                    <td>{{ $partner->adrees }}</td>
                    <td>
                        @if($partner->imagmenu)
                            <img src="{{ asset('storage/'.$partner->imagmenu) }}" alt="Logo" width="50">
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
