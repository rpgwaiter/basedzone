<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicalRelease extends Model
{
    use HasFactory;

    protected $fillable = [
        'release_title', 'video_type', 'country', 'color', 'size', 'package', 'picture_ratio', 'sound_encoding',
        'play_mode', 'category', 'publisher', 'collection', 'main_language', 'captioning', 'has_commentary',
        'has_subtitles', 'lddb_link'
    ];

    public function media()
    {
        return $this->belongsTo('App\Models\Media');
    }
}
