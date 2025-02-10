<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TangoExpress')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">TangoExpress</div>
        <div class="nav-links">
            <a href="/signup" class="btn btn-outline-light">Sign Up</a>
            <a href="/login" class="btn btn-outline-light">Login</a>
        </div>
    </nav>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
