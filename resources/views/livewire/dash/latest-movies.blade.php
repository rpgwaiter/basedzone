<?php
$movies = \App\Models\Media::all()
    ->where('media_type', 'movie')
    ->sortBy('created_at');
?>
@foreach($movies as $movie)
    <div class="mx-auto w-1/5 container items-center text-center">
        <img class="mx-auto" src="{{asset("storage/media_cover_art/{$movie->cover_art}")}}" \>
        <p class="font-semibold">{{sprintf("%s (%d)", $movie->name, $movie->year)}}</p>
        <p>Added: {{$movie->created_at}}</p>
    </div>
@endforeach
