<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaptureCardVote extends Model
{
    use HasFactory;

    public function user() {
        return $this->hasOne('App\Models\User');
    }
    public function captureCard() {
        return $this->hasOne('App\Models\CaptureCard');
    }
}
