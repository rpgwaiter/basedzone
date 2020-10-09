<?php

namespace App\Http\Livewire\Media;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Media;

class Create extends Component
{
    use WithFileUploads;

    public $cover_image;
    public $name;
    public $year;
    public $media_type;
    public $imdb_id;

    public function save()
    {
        $this->validate([
            'cover_image' => 'image|max:8192', // 1MB Max
        ]);
        $media = new Media;
        #$media['name'] = $this->$name;



        //$this->photo->store('photos');
    }
}
