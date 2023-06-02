@extends('layouts.main')

@section('content')
    <h1 style="margin-left: 50px; font-size: 30px; color: #58A746">Welkom {{ Auth::user()->name }} (Admin)</h1>
    <ul style="margin: 50px">
        <a href="{{ route('admin.users') }}" class="admin-tabel-btn">Gebruikers tabel</a>
        <a href="{{ route('admin.advertisements') }}" class="admin-tabel-btn">Advertenties tabel</a>
        <a href="{{ route('admin.requests') }}" class="admin-tabel-btn">Aanvragen tabel</a>
    </ul>

    @yield('admin-table');
    
@endsection('content')