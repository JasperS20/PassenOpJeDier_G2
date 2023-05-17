@extends('layouts.main')
@extends('layouts.navbar-advertenties')

@section('content')
    <h1 style="margin-left: 50px; font-size: 30px; color: #58A746">Jouw Advertenties</h1>

    @unless($advertisements->isEmpty())

    @foreach($advertisements as $advertisements)
    <x-advertisement-card :advertisements="$advertisements" />
    @endforeach

    @else
    <section class="no-advertisements">
        <img src="img/geen-advertenties.png" alt="" style="height: 300px; display: block; margin: auto;">
        <p style="color: #3F3E3D; text-align: center; margin:5px;">Je hebt nog geen advertentie aangemaakt. <br> <a href="/advertenties/aanmaken" style="color: #58A746;">Klik</a> hier om een advertentie aan te maken!</p>
    </section>
    @endunless
@endsection('content')