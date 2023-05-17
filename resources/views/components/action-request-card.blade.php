@props(['careRequests'])

<x-card>
    <section class="card">
        <div class="add-items">
            <li><p>Gebruiker: {{$careRequests->care_taker_name}}</p></li>
            <li><p>Naam dier: {{$careRequests->advertisement_name_animal}}</p></li>
            <li><p>Soort dier: {{$careRequests->advertisement_animal}}</p></li>
            <li style="margin-top: 20px;"><a href="/account/{{$careRequests->care_taker_id}}/bekijken" style="color: rgb(63, 58, 58);">Bekijk profiel</a></li>
            {{-- <li><p>Prijs: € {{$careRequests->advertisement_price}}/ dag</p></li>
            <li><p>Van: {{$careRequests->advertisement_date_start}}</p></li>
            <li><p>Tot: {{$careRequests->advertisement_date_end}}</p></li> --}}
            <!-- <li><p>Meer informatie</p></li> -->
        </div>
        <section class="action-buttons">
            <div>
                <form method="POST" action="/advertenties/{{$careRequests->id}}/accepteren">
                    @csrf
                    @method('PUT')
                    <input type="submit" value="Accepteren" class="action-btn" style="background-color: #23702e; margin-top: -20px">
                </form>
            </div>
            <div>
                <form method="POST" action="/advertenties/{{$careRequests->id}}/afwijzen">
                    @csrf
                    @method('PUT')
                    <input type="submit" value="Afwijzen" class="action-btn" style="background-color: #ff3333; margin-top: -20px">
                </form>
            </div>
        </section>
    </section>
</x-card>