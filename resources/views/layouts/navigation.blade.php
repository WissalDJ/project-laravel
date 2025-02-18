<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        /*La 1 ere Page : */
        /*navbar : */
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

        .navbar {
            background: linear-gradient(90deg, #1a1a1a, #333333, #1a1a1a);
            background-size: 400% 400%;
            animation: gradient-animation 8s ease infinite;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .navbar-brand {
            font-family: 'Pacifico', cursive;
            font-size: 2rem;
            font-weight: bold;
            color: #000000;
            text-transform: uppercase;
            animation: logo-animation 2s ease-in-out infinite;
        }

        @keyframes logo-animation {
            0%, 100% {
                transform: scale(1);
                color: #f0f0f0;
            }
            50% {
                transform: scale(1.1);
                color: #ff2600;
            }
        }

        .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-links a {
            color: #f0f0f0;
            margin-left: 1rem;
            padding: 0.5rem 1rem;
            border: 2px solid transparent;
            transition: all 0.3s ease-in-out;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .nav-links a:before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: all 0.5s ease-in-out;
            transform: rotate(45deg);
            z-index: -1;
        }

        .nav-links a:hover:before {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .nav-links a:hover {
            color: #1a1a1a;
            border: 2px solid #f0f0f0;
        }

        .nav-links .btn-outline-light {
            border-color: #f0f0f0;
        }

        .nav-links .btn-outline-light:hover {
            background-color: #ff2600;
            color: #1a1a1a;
        }

        /* Logout Button */
        .btn-light {
            background-color: #fff;
            color: #C14600;
            border: 2px solid #C14600;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
            margin-left: 10px; /* Add margin-left to separate the button from the welcome message */
        }

        .btn-light:hover {
            background-color: #f38240;
            color: #fff;
            transform: scale(1.05);
        }

        /* Utility class for text-white */
        .text-white {
            color: #f0f0f0;
        }
        
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="{{ url('/products') }}">TangoExpress</a>
        </div>
        <div class="nav-links">
            @guest
                <a href="{{ route('register') }}" class="btn btn-outline-light">Sign Up</a>
                <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
            @else
                <div class="user-info">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-light">Logout</button>
                    </form>
                </div>
            @endguest
        </div>
    </nav>
</body>
</html>
