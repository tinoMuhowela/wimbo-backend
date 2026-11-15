<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::where('is_published', true)->get();

        return response()->json($songs);
    }
}