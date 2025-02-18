<x-guest-layout>
    <style>
        /* Style général du body */
        body {
            background: linear-gradient(45deg, #fcc78b, #d6a670, #d6a670, #F0BE86);
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Conteneur du formulaire */
        .auth-container {
            background: white;
            width: 500px; /* Increased width */
            padding: 40px; /* Increased padding */
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Titre "TangoExpress" */
        .logo-title {
            font-size: 32px; /* Increased font size */
            font-weight: bold;
            color: #d6a670;
            margin-bottom: 25px; /* Increased margin bottom */
        }

        /* Style des labels */
        .block label {
            font-weight: bold;
            display: flex;
            margin-bottom: 10px; /* Increased margin bottom */
            text-align: center;
        }

        /* Style des champs de saisie */
        .block input {
            width: 100%;
            padding: 12px; /* Increased padding */
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px; /* Increased font size */
            transition: 0.3s;
        }

        .block input:focus {
            border-color: #d6a670;
            outline: none;
            box-shadow: 0 0 5px rgba(214, 166, 112, 0.5);
        }

        /* Flexbox pour aligner les boutons */
        .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px; /* Added margin bottom */
        }

        /* Lien "Mot de passe oublié ?" */
        .flex a {
            text-decoration: none;
            color: #d6a670;
            font-size: 16px; /* Increased font size */
        }

        .flex a:hover {
            text-decoration: underline;
        }

        /* Boutons */
        .btn {
            background-color: black;
            color: white;
            padding: 15px 30px; /* Increased padding */
            border-radius: 8px;
            font-size: 18px; /* Increased font size */
            cursor: pointer;
            border: none;
            font-weight: bold;
            transition: 0.3s;
            width: 100%;
            margin-top: 15px; /* Increased margin top */
        }

        .btn:hover {
            background-color:rgb(212, 127, 0);
        }
    </style>

    <div class="auth-container">
        <div class="logo-title">TangoExpress</div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="block">
                <x-input-label for="email" :value="('Email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="block">
                <x-input-label for="password" :value="('Password')" />
                <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Lien Mot de passe oublié -->
            <div class="flex">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                @endif
            </div>

            <!-- Boutons Connexion & Inscription -->
            <button type="submit" class="btn">
                {{ __('Log in') }}
            </button><br><br>

            <a href="{{ route('register') }}" class="btn">
                {{ __('Register') }}
            </a>
        </form>
    </div>
</x-guest-layout>
