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
            width: 400px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Titre "TangoExpress" */
        .logo-title {
            font-size: 28px;
            font-weight: bold;
            color: #d6a670;
            margin-bottom: 20px;
        }

        /* Style des labels */
        .block label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        /* Style des champs de saisie */
        .block input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            transition: 0.3s;
        }

        .block input:focus {
            border-color: #d6a670;
            outline: none;
            box-shadow: 0 0 5px rgba(214, 166, 112, 0.5);
        }

        /* Lien vers la connexion */
        .flex a {
            text-decoration: none;
            color: #d6a670;
            font-size: 14px;
        }

        .flex a:hover {
            text-decoration: underline;
        }

        /* Boutons */
        .btn {
            background-color: black;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            font-weight: bold;
            transition: 0.3s;
            width: 100%;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #333;
        }
    </style>

    <div class="auth-container">
        <div class="logo-title">TangoExpress</div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="block">
                <x-input-label for="name" :value="('Name')" />
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="block">
                <x-input-label for="email" :value="('Email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="block">
                <x-input-label for="password" :value="('Password')" />
                <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="block">
                <x-input-label for="password_confirmation" :value="('Confirm Password')" />
                <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Lien vers connexion -->
            <div class="flex">
                <a href="{{ route('login') }}">{{ __('Already registered? Log in') }}</a>
            </div>

            <!-- Bouton Inscription -->
            <button type="submit" class="btn">
                {{ __('Register') }}
            </button>
        </form>
    </div>
</x-guest-layout>