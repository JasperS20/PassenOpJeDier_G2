@extends('layouts.main')

@section('content')
    <h1 style="margin-left: 50px; font-size: 30px; color: #58A746">Welkom {{$user->name}} (Admin)</h1>

    <section>
        <table class="user-table">
            <thead>
                <tr>
                    <th class="table-header">ID</th>
                    <th class="table-header">Gebruikersnaam</th>
                    <th class="table-header">Voornaam</th>
                    <th class="table-header">Achternaam</th>
                    <th class="table-header">Email</th>
                    <th class="table-header">Adres</th>
                    <th class="table-header">Straatnaam</th>
                    <th class="table-header">Huisnummer</th>
                    <th class="table-header">Telefoonnummer</th>
                    <th class="table-header">Leeftijd</th>
                    <th class="table-header">Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->streetname }}</td>
                        <td>{{ $user->housenumber }}</td>
                        <td>{{ $user->phonenumber }}</td>
                        <td>{{ $user->age }}</td>
                        <td>
                            <form method="POST" action="{{ route('users.delete', ['id' => $user->id]) }}">
                                @csrf
                                @method('PUT')
                                <input type="submit" value="Verwijderen">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection('content')