<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;

class YouthController extends Controller
{

    public function index()
    {
        // Envia para a view
        $newsEducation = News::whereHas('category', function ($query) {
            $query->where('name', ['Educação']);
        })->get();
        $newsSport = News::whereHas('category', function ($query) {
            $query->where('name', ['Desporto']);
        })->get();
        $newsTech = News::whereHas('category', function ($query) {
            $query->where('name', ['Tecnologia']);
        })->get();
        $newsbusiness = News::whereHas('category', function ($query) {
            $query->where('name', ['Empreendedorismo']);
        })->get();
        return view('site.youth.index', compact(
            'newsEducation',
            'newsSport',
            'newsTech',
            'newsbusiness',
        ));
    }
}
