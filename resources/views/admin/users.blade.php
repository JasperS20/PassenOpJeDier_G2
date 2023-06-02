@extends('admin.index')

@section('admin-table')
<section>
    <div class="table-wrapper">
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
                @foreach ($user as $user)
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
                                <input type="submit" value="Verwijderen" style="background-color: red;">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection('admin-table')