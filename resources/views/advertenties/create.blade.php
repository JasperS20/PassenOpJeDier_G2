@extends('layouts.main')
@extends('layouts.navbar-advertenties')

@section('content')
    <h1 style="margin-left: 50px; font-size: 30px; color: #58A746">Maak een nieuwe advertentie</h1>

    <form action="/advertenties" method="POST" enctype="multipart/form-data" style="margin:30px;">
        @csrf
        <div class="image-field" style="float:right;">
            <h3>Selecteer hier foto's van jouw dier</h3>
            <input class="input-img" type="file" id="img" name="img" accept="image/*">
            @error('img')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="two-inputs">
            <div class="input-field">
                <label for="name">Naam van het dier*</label><br>
                <input type="text" name="name" value="">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-field">
                <label for="animal">Soort dier*</label><br>
                <input type="text" name="animal" value="">
                @error('animal')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="two-inputs">
            <div class="input-field">
                <label for="price">Prijs per uur*</label><br>
                <input type="number" name="price" value="">
                @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="two-inputs">
            <div class="input-field">
                <label for="date_start">Datum - begin*</label><br>
                <input type="date" name="date_start" value="2023-01-01" min="2023-01-01" max="2025-12-31">
                @error('date_start')
                <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
            </div>
            <div class="input-field">
                <label for="date_end">Datum - eind*</label><br>
                <input type="date" name="date_end" value="2023-01-01" min="2023-01-01" max="2025-12-31">
                @error('date_end')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="input-field">
                <label for="description">Beschrijving</label><br>
                <textarea name="description" cols="60" rows="7"></textarea>
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        <input type="submit" value="Publiceren" class="profile-button">
    </form>
@endsection('content')