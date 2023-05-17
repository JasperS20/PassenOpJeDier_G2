@extends('layouts.main')
@extends('layouts.navbar-advertenties')

@section('content')
    <article class="viewUser">
        <div>
            <h3>Gebruikersnaam:</h3>
            <h3 style="margin-left: 10px">{{$user->name}}</h3>
            <br>
            <h3>Voornaam:</h3>
            <h3 style="margin-left: 10px">{{$user->surname}}</h3>
            <br>
            <h3>Achternaam:</h3>
            <h3 style="margin-left: 10px">{{$user->lastname}}</h3>
            <br>
            <h3>Leeftijd:</h3>
            <h3 style="margin-left: 10px">{{$user->age}}</h3>
            <br>
            <h3>Telefoonnummer:</h3>
            <h3 style="margin-left: 10px">{{$user->phonenumber}}</h3>
            <br>
            <h3>Postcode:</h3>
            <h3 style="margin-left: 10px">{{$user->address}}</h3>
            <br>
            <h3>Adres:</h3>
            <h3 style="margin-left: 10px">{{$user->streetname}} {{$user->housenumber}}</h3>
            <br>
            <h3>Foto's van het huis:</h3>
            {{$user->img}}
            <br>
            <a href="/reviews/{{$user->id}}/bekijken" style=" color: #000000; text-decoration: underline;">Bekijk de reviews van {{$user->name}}</a>
        </div>
    </article>
    <article>
        <h1 style="margin-left: 50px; font-size: 30px; color: #58A746">Laat een review achter!</h1>
        <form action="/review/{{$user->id}}" method="POST">
            @csrf
            <div class="input-field" style="margin: 50px">
                <label for="name">Gebruikersnaam:</label><br>
                <input type="name" name="name" value="{{$user->name}}" readonly>
            </div>
            <div class="input-field" style="margin: 50px">
                <label for="description">Review:</label><br>
                <textarea type="description" name="description" value="" cols="80" rows="7"></textarea>
                <br>
            </div>
            <input class="review-btn" type="submit" value="Opslaan">
        </form>
    </article>
@endsection('content')