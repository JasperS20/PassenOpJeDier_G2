@extends('layouts.main')
@extends('layouts.navbar-advertenties')

@section('content')
    <h1 style="margin-left: 50px; font-size: 30px; color: #58A746">Verzoeken / Aanvragen</h1>

    @foreach($careRequests as $careRequests)
    <x-action-request-card :careRequests="$careRequests" />
    @endforeach
@endsection('content')