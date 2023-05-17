@extends('layouts.main')

@section('content')
    <h1 style="margin-left: 50px; font-size: 30px; color: #58A746">Welkom {{$user->name}}</h1>

    <section class="content">
        <section class="content-box">
            <h1>Advertenties</h1>
            <p>Ben jij een tijdje niet thuis en moet er op je huisdier gepast worden? Maak dan nu
                een advertentie aan!
            </p>
            <div class="dashboard-btn">
                <a href="{{ route('advertenties') }}">Maak een nieuwe advertentie!</a><i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i>
            </div>
        </section>
        <section class="content-box">
            <h1>Diensten</h1>
            <p>Wil jij andere mensen helpen door op hun huisdier te passen? Bekijk dan het aanbod 
                en toon interesse op advertenties!
            </p>
            <div class="dashboard-btn">
                <a href="{{ route('diensten') }}">Bekijk het aanbod!</a><i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i>
            </div>
        </section>
    </section>
@endsection('content')