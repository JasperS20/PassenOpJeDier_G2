@extends('layouts.main')
@extends('layouts.navbar-advertenties')

@section('content')
    <h1 style="margin-left: 50px; font-size: 30px; color: #58A746">De reviews van {{$reviews[0]->username}}</h1>

    @foreach($reviews as $reviews)
    <x-reviews-card :reviews="$reviews" />
    @endforeach
@endsection('content')