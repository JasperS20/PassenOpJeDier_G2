@extends('layouts.main')

@section('content')
    <h1 style="margin-left: 50px; font-size: 30px; color: #58A746">Pas jouw profiel aan</h1>

    <form class="profile-form" action="" style="margin:35px">
        <div class="image-field" style="float:right;">
            <h3 style="color: black;">Upload hier een foto van jouw woonkamer</h3>
            <input class="input-img" type="file" name="img" accept="image/*" readonly>
        </div>
        <div class="input-field">
            <label for="name">Gebruikersnaam</label><br>
            <input type="text" name="name" value="{{$user->name}}" readonly>
        </div>
        <div class="two-inputs">
            <div class="input-field">
                <label for="surname">Voornaam</label><br>
                <input type="text" name="surename" value="{{$user->surname}}" readonly>
            </div>
            <div class="input-field">
                <label for="lastname">Achternaam</label><br>
                <input type="text" name="lastname" value="{{$user->lastname}}" readonly>
            </div>
        </div>
        <div class="input-field">
            <label for="address">Postcode</label><br>
            <input type="text" name="address" value="{{$user->address}}" readonly>
        </div>
        <div class="two-inputs">
            <div class="input-field">
                <label for="streetname">Straatnaam</label><br>
                <input type="text" name="streetname" value="{{$user->streetname}}" readonly>
            </div>
            <div class="input-field">
                <label for="housenumber">Huisnummer</label><br>
                <input type="text" name="housenumber" value="{{$user->housenumber}}" readonly>
            </div>
        </div>
        <div class="two-inputs">
            <div class="input-field">
                <label for="phonenumber">Telefoonnummer</label><br>
                <input type="text" name="phonenumber" value="{{$user->phonenumber}}" readonly>
            </div>
            <div class="input-field">
                <label for="age">Leeftijd</label><br>
                <input type="text" name="age" value="{{$user->age}}" readonly>
            </div>
        </div>
    </form>
    <a class="profile-button" href="{{ route('account-edit') }}">Edit</a>
@endsection('content')