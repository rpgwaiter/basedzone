<?php

namespace App\Http\Livewire\Media;

use Livewire\Component;

class DisplayFull extends Component
{
    public $media;

    public function render()
    {
        return view('livewire.media.display-full');
    }
}
