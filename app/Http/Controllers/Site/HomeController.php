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
        $newsTrending2 = News::where('status', 'published')->orderByDesc('id')->take(2)->get();
        $videos = Video::where('type', 'video')->latest()->get();
        // Envia para a view
        return view('site.home.index', compact('newsTrending', 'newsTrending2', 'videos'));
    }

    public function contact()
    {
        // Envia para a view
        return view('site.contact.index');
    }
    public function about()
    {
        // Envia para a view
        return view('site.about.index');
    }
    public function news()
    {
        // Envia para a view
        return view('site.news.index');
    }

    public function newsProfile()
    {
        // Envia para a view
        return view('site.news.profile.index');
    }

    public function newsNotice()
    {
        // Envia para a view
        return view('site.news.notice.index');
    }

    public function newsEvent()
    {
        // Envia para a view
        return view('site.news.event.index');
    }

    public function newsEventDetail()
    {
        // Envia para a view
        return view('site.news.event.detail.index');
    }

    public function newsArticle()
    {
        // Envia para a view
        return view('site.news.article.index');
    }
}
