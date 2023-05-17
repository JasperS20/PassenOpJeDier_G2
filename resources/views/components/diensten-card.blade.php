@props(['advertisements',])

<x-card>
    <section class="card">
        <div class="add-items">
            <li><p>Naam dier: {{$advertisements->name}}</p></li>
            <li><p>Soort dier: {{$advertisements->animal}}</p></li>
            <li><p>€{{$advertisements->price}} / dag</p></li>
            <li><p>Van: {{$advertisements->date_start}}</p></li>
            <li><p>Tot: {{$advertisements->date_end}}</p></li>
            <!-- <li><p>Meer informatie</p></li> -->
        </div>
        <section class="action-buttons">
            <div>
                <a href="/advertenties/{{$advertisements->id}}/bekijken" class="action-btn" style="background-color: #ffffff;"><i class="fa-solid fa-info"></i></a> 
            </div>
            <div>
                <form method="POST" action="/diensten/{{$advertisements->id}}">
                    @csrf
                    <input type="submit" value="Aanmelden" class="action-btn" style="background-color: #ffffff; color: #3F3E3D; margin-top: -20px">
                </form>
            </div>
        </section>
    </section>
</x-card>