<?php

namespace App\Http\Livewire\Media;

use Livewire\Component;
use App\Models\Media;
use Livewire\WithFileUploads;

class AddForm extends Component
{
    use WithFileUploads;

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
            'cover_art' => 'required|image'
        ]);

        if ($this->cover_art){
            $filenameWithExt = $this->cover_art->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $this->cover_art->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path = $this->cover_art
                ->storeAs('media_cover_art', $filenameToStore, 'public');
        } else {
            $filenameToStore = "noimage.jpg";
        }

        $media = new Media;
        $media->name = $this->name;
        $media->year = $this->year;
        $media->media_type = $this->media_type;
        $media->imdb_id = $this->imdb_id;
        $media->cover_art = $filenameToStore;
        $media->save();

        return redirect()->route('dashboard');


    }

    public function render()
    {
        return view('livewire.media.add-form');
    }
}
