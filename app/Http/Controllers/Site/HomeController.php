<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use App\Models\Video;
use App\Models\News;

class HomeController extends Controller
{

    public function index()
    {
        $newsTrending = News::where('status', 'published')
            ->where('detach', 'destaque')
            ->whereHas('category', function ($query) {
                $query->where('name', 'Política');
            })
            ->orderByDesc('id')
            ->take(1)
            ->get();

        $newsTrending2 = News::where('status', 'published')
            ->orderByDesc('id')
            ->take(2)
            ->get();

        $newness = News::where('status', 'published')
            ->where('detach', 'novidade')
            ->orderByDesc('description')
            ->take(4)
            ->get();

        $atualizations = News::where('status', 'published')
            ->where('detach', 'atualizacao')
            ->orderByDesc('id')
            ->take(4)
            ->get();

        $videos = Video::where('type', 'video')->latest()->get();
        // Envia para a view
        return view('site.home.index', compact('newsTrending', 'newsTrending2', 'newness', 'atualizations', 'videos'));
    }

}
