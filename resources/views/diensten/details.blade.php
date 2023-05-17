@extends('layouts.main')

@section('content')
    <h1 style="margin-left: 50px; font-size: 30px; color: #58A746">Details van de advertentie van {{$advertisements->user_name}}</h1>
    @include('layouts.navbar-diensten')

    <article class="viewUser">
        <div>
            <h3>Gebruikersnaam:</h3>
            <h3 style="margin-left: 10px">{{$advertisements->user_name}}</h3>
            <br>
            <h3>Naam van het dier:</h3>
            <h3 style="margin-left: 10px">{{$advertisements->name}}</h3>
            <br>
            <h3>Soort dier:</h3>
            <h3 style="margin-left: 10px">{{$advertisements->animal}}</h3>
            <br>
            <h3>Prijs:</h3>
            <h3 style="margin-left: 10px">€ {{$advertisements->price}}/ uur</h3>
            <br>
            <h3>Datum van beginnen oppassen:</h3>
            <h3 style="margin-left: 10px">{{$advertisements->date_start}}</h3>
            <br>
            <h3>Datum van stoppen oppassen:</h3>
            <h3 style="margin-left: 10px">{{$advertisements->date_end}}</h3>
            <br>
            <h3>Extra informatie:</h3>
            <h3 style="margin-left: 10px">{{$advertisements->description}}</h3>
            <br>
            <h3>Foto van het dier:</h3>
            {{$advertisements->img}}
        </div>
    </article>
@endsection('content')