<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaptureCard extends Model
{
    use HasFactory;

    public function user() {
        return $this->hasOne('App\Models\User', 'created_by',);
    }
}
