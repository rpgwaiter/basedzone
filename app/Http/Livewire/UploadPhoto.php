<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;

use Livewire\Component;

class UploadPhoto extends Component
{
    use WithFileUploads;

    public $photo;

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:8192', // 1MB Max
        ]);

        $this->photo->store('photos');
    }
}


