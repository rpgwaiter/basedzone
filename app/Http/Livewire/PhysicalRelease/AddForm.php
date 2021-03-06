<?php

namespace App\Http\Livewire\PhysicalRelease;

use Livewire\Component;
use App\Models\Media;
use Livewire\WithFileUploads;
use App\Models\PhysicalRelease;
use App\Models\Equipment;


class AddForm extends Component
{
    public $release_type;
    public $imdb_id;
    public $mediaID; // for future reference, no underscores in vars passed in through livewire!
    public $scans;
    public $player;
    public $isDuplicator;

    use WithFileUploads;

    public function render()
    {
        if (isset($this->mediaID)){
            $this->imdb_id = Media::find((int)$this->mediaID)->imdb_id;
        }
        return view('livewire.physical-release.add-form');
    }

    public function submit()
    {

    }
}
