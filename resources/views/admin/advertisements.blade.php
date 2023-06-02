@extends('admin.index')

@section('admin-table')
<section>
    <div class="table-wrapper">
        <table class="user-table">
            <thead>
                <tr>
                    <th class="table-header">Advertentie ID</th>
                    <th class="table-header">Gebruiker ID</th>
                    <th class="table-header">Gebruikersnaam</th>
                    <th class="table-header">Naam dier</th>
                    <th class="table-header">Soort dier</th>
                    <th class="table-header">prijs</th>
                    <th class="table-header">Datum start</th>
                    <th class="table-header">Datum eind</th>
                    <th class="table-header">Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($advertisements as $advertisements)
                    <tr>
                        <td>{{ $advertisements->id }}</td>
                        <td>{{ $advertisements->user_id }}</td>
                        <td>{{ $advertisements->user_name }}</td>
                        <td>{{ $advertisements->name }}</td>
                        <td>{{ $advertisements->animal }}</td>
                        <td>{{ $advertisements->price }}</td>
                        <td>{{ $advertisements->date_start }}</td>
                        <td>{{ $advertisements->date_end }}</td>
                        <td>
                            <form method="POST" action="{{ route('advertisements.delete', ['id' => $advertisements->id]) }}">
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