@extends('layouts.main')
@extends('layouts.navbar-advertenties')

@section('content')
    <h1 style="margin-left: 50px; font-size: 30px; color: #58A746">Pas je advertentie aan</h1>

    <form action="/advertenties/{{$advertisements->id}}" method="POST" enctype="multipart/form-data" style="margin:30px;">
        @csrf
        @method('PUT');
        <div class="image-field" style="float:right;">
            <h3>Selecteer hier foto's van jouw dier</h3>
            <input class="input-img" type="file" name="img" accept="image/*" value="{{$advertisements->img}}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="two-inputs">
            <div class="input-field">
                <label for="name">Naam van het dier*</label><br>
                <input type="text" name="name" value="{{$advertisements->name}}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-field">
                <label for="animal">Soort dier*</label><br>
                <input type="text" name="animal" value="{{$advertisements->animal}}">
                @error('animal')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="two-inputs">
            <div class="input-field">
                <label for="price">Prijs per uur*</label><br>
                <input type="number" name="price" value="{{$advertisements->price}}">
                @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="two-inputs">
            <div class="input-field">
                <label for="date_start">Datum - begin*</label><br>
                <input type="date" name="date_start" value="{{$advertisements->date_start}}" min="2023-01-01" max="2025-12-31">
                @error('date_start')
                <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
            </div>
            <div class="input-field">
                <label for="date_end">Datum - eind*</label><br>
                <input type="date" name="date_end" value="{{$advertisements->date_end}}" min="2023-01-01" max="2025-12-31">
                @error('date_end')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="input-field">
                <label for="description">Beschrijving</label><br>
                <textarea name="description" cols="60" rows="7" value="{{$advertisements->description}}"></textarea>
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <input type="submit" value="Opslaan" class="profile-button">
    </form>
@endsection('content')