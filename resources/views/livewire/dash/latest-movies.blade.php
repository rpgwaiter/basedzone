<?php
$movies = \App\Models\Media::all()
    ->where('media_type', 'movie')
    ->sortBy('created_at')
    ->take(10);
?>
@foreach($movies as $movie)
    <div class="mx-auto w-1/5 container items-center text-center">
        <img class="mx-auto" src="{{ $movie->poster }}" \>
        <p class="font-semibold">{{ $movie->getDisplayNameAttribute() }}</p>
        <p>Added: {{ $movie->created_at }}</p>
    </div>
@endforeach
