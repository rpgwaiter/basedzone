<?php

namespace App\Http\Livewire\Media;

use App\Models\Media;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class AddMovie extends Component
{
    public $imdb_id;

    public function render()
    {
        return view('livewire.media.add-movie');
    }
    public function submit()
    {
        $apikey = env('OMDB_API_KEY');
        $r = Http::get("http://omdbapi.com/?i={$this->imdb_id}&apikey={$apikey}")->json();

        // OMDB vote number strings have a comma in them, let's take care of that
        $numVotes = $b = str_replace( ',', '', $r['imdbVotes'] );

        $mediaToAdd = New Media([
            'title' => $r['Title'],             'year' => $r['Year'],
            'rated' => $r['Rated'],             'released' => $r['Released'],
            'runtime' => $r['Runtime'],         'genre' => $r['Genre'],
            'director' => $r['Director'],       'writer' => $r['Writer'],
            'actors' => $r['Actors'],           'plot' => $r['Plot'],
            'language' => $r['Language'],       'country' => $r['Country'],
            'awards' => $r['Awards'],           'poster' => $r['Poster'],
            'metascore' => $r['Metascore'],     'imdb_rating' => $r['imdbRating'],
            'imdb_votes' => $numVotes,          'imdb_id' => $r['imdbID'],
            'media_type' => $r['Type'],         'production' => $r['Production'],
            'created_by' => auth()->user()->id
        ]);
        $mediaToAdd->save();
    }
}
