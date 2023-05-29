@props(['reviews'])

<x-card>
    <section class="card">
        <div class="add-items">
            <li><p style="color: black">{{$reviews->username}}</p></li>
            <li><p style="color: black">{{$reviews->description}}</p></li>
            <!-- <li><p>Meer informatie</p></li> -->
        </div>
</x-card>