<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partners Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #333;
        }
        .header p {
            color: #777;
        }
        .card {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .card-item {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            transition: transform 0.2s;
        }
        .card-item:hover {
            transform: scale(1.02);
            border-color: #007BFF;
        }
        .name {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
        }
        .detail {
            margin: 5px 0;
            color: #555;
        }
        .detail strong {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Partners Report</h1>
            <p>Generated on: {{ date('Y-m-d H:i:s') }}</p>
        </div>
        <div class="card">
            @foreach($partners as $partner)
            <div class="card-item">
                <div class="name">{{ $partner->name }} {{ $partner->prenom }}</div>
                <div class="detail"><strong>Email:</strong> {{ $partner->email }}</div>
                <div class="detail"><strong>Telephone:</strong> {{ $partner->tel }}</div>
                <div class="detail"><strong>Entreprise:</strong> {{ $partner->nomEntreprise }}</div>
                <div class="detail"><strong>Address:</strong> {{ $partner->adrees }}</div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>