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
                <a href="/advertenties/{{$advertisements->id}}/bewerken" class="action-btn" href="" style="background-color: #ffffff;"><i class="fa-solid fa-pen-to-square"></i></a> 
            </div>
            <div>
                <form method="POST" action="/advertisements/{{$advertisements->id}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Verwijderen" class="action-btn" style="background-color: #ff3333; margin-top: -20px">
                </form>
            </div>
        </section>
    </section>
</x-card>