@extends('layouts.app')
@section('title', 'Contact - TangoExpress')
@section('content')
    <div class="contact-container">
        <img class="contact-image" src="images/imageform.avif" alt="">
        <div class="contact-form">
            <h2>Contactez-nous</h2>
            <form>
                <div class="form-group">
                    <label for="email">Numéro ou Email :</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="contact-button">Contactez-nous</button>
                <br>
                <button type="submit" class="contact-button2"><a href="{{ route('orders.gotoproducts') }}"> Back to products</a></button>

            </form>
        </div>
    </div>
    <style>
        body{
           background-color:   
        }
        .contact-container {
            display: flex;
            width: 70%;
            height: 800px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-left: 350px;
            background-color: #ffffff; /* Beige background for form */



        }
        .contact-image {
            width: 50%;
            background: url('contact-image.jpg') no-repeat center center/cover;
            background-color: #ffffff; /* Beige background for form */
        }
        .contact-form {
            width: 50%;
            padding: 30px;
            background-color: #ffffff; /* Beige background for form */
            margin-top: 200px
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: black; /* Black text for heading */
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: black; /* Black text for labels */
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .contact-button {
            width: 100%;
            padding: 10px;
            background-color: black; /* Black button */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .contact-button2{
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            background-color: #f89f4c; /* Black button */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;

        }
        .contact-button2:hover{
            background-color: #f89f4c9f; /* Darker shade on hover */
        }
        .contact-button:hover {
            background-color: #000000c2; /* Darker shade on hover */
        }
    </style>
@endsection