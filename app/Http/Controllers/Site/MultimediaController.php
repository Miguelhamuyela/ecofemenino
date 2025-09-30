<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use App\Models\Video;

class MultimediaController extends Controller
{

    public function index()
    {
        $images = Galery::orderBy('created_at', 'desc')->take(6)->get();
        $videos = Video::where('type', 'video')->latest()->get();
        $podcasts = Video::where('type', 'podcast')->latest()->get();

        return view('site.multimedia.index', compact('images', 'videos', 'podcasts'));
    }
}
