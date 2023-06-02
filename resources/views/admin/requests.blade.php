@extends('admin.index')

@section('admin-table')
<section>
    <div class="table-wrapper">
        <table class="user-table">
            <thead>
                <tr>
                    <th class="table-header">Aanvraag ID</th>
                    <th class="table-header">Gebruiker ID</th>
                    <th class="table-header">Naam eigenaar</th>
                    <th class="table-header">Naam oppas</th>
                    <th class="table-header">Naam dier</th>
                    <th class="table-header">Soort dier</th>
                    <th class="table-header">prijs</th>
                    <th class="table-header">Datum start</th>
                    <th class="table-header">Datum eind</th>
                    <th class="table-header">Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($careRequests as $careRequests)
                    <tr>
                        <td>{{ $careRequests->id }}</td>
                        <td>{{ $careRequests->care_taker_id }}</td>
                        <td>{{ $careRequests->user_name }}</td>
                        <td>{{ $careRequests->care_taker_name }}</td>
                        <td>{{ $careRequests->advertisement_name_animal }}</td>
                        <td>{{ $careRequests->advertisement_animal }}</td>
                        <td>{{ $careRequests->advertisement_price }}</td>
                        <td>{{ $careRequests->advertisement_date_start }}</td>
                        <td>{{ $careRequests->advertisement_date_end }}</td>
                        <td>
                            <form method="POST" action="{{ route('requests.delete', ['id' => $careRequests->id]) }}">
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