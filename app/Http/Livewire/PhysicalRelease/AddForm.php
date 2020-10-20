<?php

namespace App\Http\Livewire\PhysicalRelease;

use Livewire\Component;
use App\Models\Media;
use App\Models\PhysicalRelease;

class AddForm extends Component
{
    public $release_type;
    public $imdb_id;
    public $mediaID; // for future reference, no underscores in vars passed in through livewire!

    public function render()
    {
        if (isset($this->mediaID)){
            $this->imdb_id = Media::find((int)$this->mediaID)->imdb_id;
        }
        return view('livewire.physical-release.add-form');
    }
}
