<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class NewsController extends Controller
{

    public function index()
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
