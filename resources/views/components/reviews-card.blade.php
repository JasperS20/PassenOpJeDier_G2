@props(['reviews'])

<x-card>
    <section class="review-card">
        <div class="add-items">
            <li><p class="username" style="color:black">{{$reviews->username}}</p></li>
            <li><p class="description" style="color:black">{{$reviews->description}}</p></li>
            <!-- <li><p>Meer informatie</p></li> -->
        </div>
</x-card>