<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News; // Modelo da tabela de notícias
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show($id)
    {
        // Busca notícia pelo id
        $news = News::with(['category'/* , 'author' */])->findOrFail($id);

        // Pega notícias relacionadas (mesma categoria, excluindo a atual)
        $relatedNews = News::where('category_id', $news->category_id)
                        ->where('id', '!=', $news->id)
                        ->orderByDesc('id')
                        ->take(4)
                        ->get();

        return view('site.detail.index', compact('news', 'relatedNews'));
    }
}
