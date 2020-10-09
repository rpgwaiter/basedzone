<?php

namespace App\Http\Livewire\Media;

use Livewire\Component;
use App\Models\Media;

class AddForm extends Component
{
    public $name;
    public $year;
    public $media_type;
    public $imdb_id;
    public $cover_art;

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'year' => 'required',
            'media_type' => 'required',
            'imdb_id' => '',
            'cover_art' => ''
        ]);
        Media::create($validatedData);
        return redirect()->route('media.create');


    }

    public function render()
    {
        return view('livewire.media.add-form');
    }
}
