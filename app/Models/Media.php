<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year',
        'releases',
        'media_type',
        'imdb_id',
        'cover_art'
    ];
    protected $casts = [
        'cover_art' => 'array'
    ];

    // Name (Year)
    public function getDisplayNameAttribute()
    {
        return "{$this->name} ({$this->year})";
    }
}
