@extends('layouts.main')
@extends('layouts.navbar-diensten')

@section('content')
    <h1 style="margin-left: 50px; font-size: 30px; color: #58A746">Mijn Diensten</h1>

    @foreach($careRequests as $careRequests)
    <x-request-card :careRequests="$careRequests" />
    @endforeach
@endsection('content')