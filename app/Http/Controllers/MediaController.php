<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\App;
use Tests\TestCase;
use App\Models\Media;

class MediaController extends Controller
{
    public function create() {
        return view('media.create');
    }
    public function index() {
//        \App\Models\Media::firstOrCreate([
//            'name' => 'Orgasmo',
//            'year' => '1997',
//            'media_type' => 'movie',
//        ]);

        $movies = \App\Models\Media::all()
            ->where('media_type', 'movie')
            ->sortBy('created_at');
        return view('dashboard', [
            'movies'=>$movies
        ]);
    }
    public static function store(Request $request)
    {
        $media = new Media;
        $media->name = $request['name'];
        $media->year = $request['year'];
        $media->media_type = $request['media_type'];
        $media->imdb_id = $request['imdb_id'];
        $request->file('cover_art')->store();
        $media->save();


    }



}
