<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
    'title',
    'artist',
    'album',
    'genre',
    'audio_path',
    'cover_image_path',
    'duration_seconds',
    'is_published',
];

}
