@extends('layouts.main')

@section('content')
    <h1 style="margin-left: 50px; font-size: 30px; color: #58A746">Pas jouw profiel aan</h1>

    {{ session('status') }}
    <form action="/account/{{$user->id}}" method="POST" enctype="multipart/form-data" style="margin:30px;">
        @csrf
        @method('PUT')
        <div class="image-field" style="float:right;">
            <h3 style="color: black;">Upload hier een foto van jouw woonkamer</h3>
            <input class="input-img" type="file" name="img" accept="image/*">
            @error('img')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="input-field">
            <label for="name">Gebruikersnaam</label><br>
            <input type="text" name="name" value="{{$user->name}}" id="name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="two-inputs">
            <div class="input-field">
                <label for="surname">Voornaam</label><br>
                <input type="text" name="surname" value="{{$user->surname}}">
                @error('surname')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-field">
                <label for="lastname">Achternaam</label><br>
                <input type="text" name="lastname" value="{{$user->lastname}}">
                @error('lastname')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="input-field">
            <label for="address">Postcode</label><br>
            <input type="text" name="address" value="{{$user->address}}">
            @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="two-inputs">
            <div class="input-field">
                <label for="streetname">Straatnaam</label><br>
                <input type="text" name="streetname" value="{{$user->streetname}}">
                @error('streetname')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-field">
                <label for="housenumber">Huisnummer</label><br>
                <input type="text" name="housenumber" value="{{$user->housenumber}}">
                @error('housenumber')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="two-inputs">
            <div class="input-field">
                <label for="phonenumber">Telefoonnummer</label><br>
                <input type="text" name="phonenumber" value="{{$user->phonenumber}}">
                @error('phonenumber')
                <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
            </div>
            <div class="input-field">
                <label for="age">Leeftijd</label><br>
                <input type="text" name="age" value="{{$user->age}}">
                @error('age')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <input type="submit" value="Opslaan" class="profile-button">
    </form>
@endsection('content')