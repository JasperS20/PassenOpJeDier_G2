@extends('layouts.main')

@section('content')
    <h1 style="margin-left: 50px; font-size: 30px; color: #58A746">Openstaande Opdrachten</h1>
    @include('layouts.navbar-diensten')

    @foreach($advertisements as $advertisements)
    <x-diensten-card :advertisements="$advertisements" />
    @endforeach
@endsection('content')