@props(['careRequests', 'advertisements'])

<x-card>
    <section class="card">
        <div class="add-items">
            <li><p>Gebruiker: {{$careRequests->user_name}}</p></li>
            <li><p>Naam dier: {{$careRequests->advertisement_name_animal}}</p></li>
            <li><p>Soort dier: {{$careRequests->advertisement_animal}}</p></li>
            <li><p>€ {{$careRequests->advertisement_price}}/ dag</p></li>
            <li><p>Van: {{$careRequests->advertisement_date_start}}</p></li>
            <li><p>Tot: {{$careRequests->advertisement_date_end}}</p></li>
            <!-- <li><p>Meer informatie</p></li> -->
        </div>
        @unless($careRequests->is_accepted == 0)
        <section class="action-buttons">
            <div class="status-btn">
                <p class="action-btn" style="background-color: #bc2a1f; margin-top: -20px">Afwachten...</p>
            </div>
        </section>

        @else
        <section class="action-buttons">
            <div class="status-btn">
                <p class="action-btn" style="background-color: #235323; margin-top: -20px">Geacepteerd!</p>
            </div>
        </section>
        @endunless
    </section>
</x-card>