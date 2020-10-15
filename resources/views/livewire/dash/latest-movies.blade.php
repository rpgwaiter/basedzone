<?php
$movies = \App\Models\Media::all()
    ->where('media_type', 'movie')
    ->sortBy('created_at')
    ->take(10);
?>
@foreach($movies as $movie)
    <div class="mx-auto my-3 w-1/5 container items-center text-center">
        <a href="{{route('media.display', ['id' => $movie->id])}}">
            <img class="mx-auto" src="{{ $movie->poster }}" \>
        </a>
        <p class="font-semibold">{{ $movie->getDisplayNameAttribute() }}</p>
        <p>Added: {{ $movie->created_at }}</p>
    </div>
@endforeach
