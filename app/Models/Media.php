<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'year', 'rated', 'released', 'runtime', 'genre', 'director', 'writer', 'actors',
        'plot', 'language', 'country', 'awards', 'poster', 'metascore', 'imdb_rating', 'imdb_votes',
        'imdb_id', 'media_type', 'production', 'physical_releases', 'created_by',
    ];

    // Name (Year)
    public function getDisplayNameAttribute()
    {
        return "{$this->title} ({$this->year})";
    }
    public function physicalReleases() {
        return $this->hasMany('App\Models\PhysicalRelease');
    }
}
