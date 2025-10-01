<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        // Envia para a view
        return view('site.news.index');
    }

    public function newsProfile()
    {
        $newsProfile = News::where('status', 'published')
            ->whereHas('category', function ($query) {
                $query->where('name', ['Perfil Inspirador']);
                })
            ->orderByDesc('id')
            ->take(6)
            ->get();
        // Envia para a view
        return view('site.news.profile.index', compact('newsProfile'));
    }

    public function newsNotice()
    {
        $noticePolitic = News::where('status', 'published')
                ->whereHas('category', function ($query) {
                    $query->where('name', ['Política']);
                    })
                ->orderByDesc('id')
                ->take(3)
                ->get();

        $noticeEconomy = News::where('status', 'published')
                ->whereHas('category', function ($query) {
                    $query->where('name', ['Economia']);
                    })
                ->orderByDesc('id')
                ->take(3)
                ->get();

        $noticeSociety = News::where('status', 'published')
                ->whereHas('category', function ($query) {
                    $query->where('name', ['Sociedade']);
                    })
                ->orderByDesc('id')
                ->take(3)
                ->get();

        $noticeInternational = News::where('status', 'published')
                ->whereHas('category', function ($query) {
                    $query->where('name', ['Internacional']);
                    })
                ->orderByDesc('id')
                ->take(3)
                ->get();

        // Envia para a view
        return view('site.news.notice.index', compact('noticePolitic', 'noticeEconomy', 'noticeSociety', 'noticeInternational'));
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
