<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;

class YouthController extends Controller
{

    public function index()
    {
        //INICIO Query para educação
            // Primeiro tenta buscar 1 notícia em destaque
            $newsEducation = News::where('detach', 'destaque')
                ->where('status', 'published')
                ->whereHas('category', function ($query) {
                    $query->where('name', 'Educação');
                })
                ->orderByDesc('id')
                ->take(1)
                ->get();

                if ($newsEducation->isEmpty()) {
                    $newsEducation = News::whereHas('category', function ($query) {
                        $query->where('name', 'Educação');
                    })
                        ->orderByDesc('id')
                        ->take(1)
                        ->get();
                }

            $newsEducation2 = News::where('detach', '<>', 'destaque')
                ->whereHas('category', function ($query) {
                    $query->where('name', 'Educação');
                })
                ->when(
                    $newsEducation->isNotEmpty() && $newsEducation->first()->detach !== 'destaque',
                    function ($query) use ($newsEducation) {
                        $query->where('id', '<>', $newsEducation->first()->id);
                    }
                )
                ->orderByDesc('id')
                ->take(3)
                ->get();
        // FIM Query para educação

        //INICIO Query para desporto
            // Primeiro tenta buscar 1 notícia em destaque
            $newsSport = News::where('detach', 'destaque')
                ->where('status', 'published')
                ->whereHas('category', function ($query) {
                    $query->where('name', 'Desporto');
                })
                ->orderByDesc('id')
                ->take(1)
                ->get();

                if ($newsSport->isEmpty()) {
                    $newsSport = News::whereHas('category', function ($query) {
                        $query->where('name', 'Desporto');
                    })
                        ->orderByDesc('id')
                        ->take(1)
                        ->get();
                }

            $newsSport2 = News::where('detach', '<>', 'destaque')
                ->whereHas('category', function ($query) {
                    $query->where('name', 'Desporto');
                })
                ->when(
                    $newsSport->isNotEmpty() && $newsSport->first()->detach !== 'destaque',
                    function ($query) use ($newsSport) {
                        $query->where('id', '<>', $newsSport->first()->id);
                    }
                )
                ->orderByDesc('id')
                ->take(3)
                ->get();
        //FIM Query para desporto

        //INICIO Query para tecnologia
        
            // Primeiro tenta buscar 1 notícia em destaque
            $newsTech = News::where('detach', 'destaque')
                ->where('status', 'published')
                ->whereHas('category', function ($query) {
                    $query->where('name', 'Tecnologia');
                })
                ->orderByDesc('id')
                ->take(1)
                ->get();

                if ($newsTech->isEmpty()) {
                    $newsTech = News::whereHas('category', function ($query) {
                        $query->where('name', 'Tecnologia');
                    })
                        ->orderByDesc('id')
                        ->take(1)
                        ->get();
                }

            $newsTech2 = News::where('detach', '<>', 'destaque')
                ->whereHas('category', function ($query) {
                    $query->where('name', 'Tecnologia');
                })
                ->when(
                    $newsTech->isNotEmpty() && $newsTech->first()->detach !== 'destaque',
                    function ($query) use ($newsTech) {
                        $query->where('id', '<>', $newsTech->first()->id);
                    }
                )
                ->orderByDesc('id')
                ->take(3)
                ->get();
        //FIM Query para tecnologia

        //INICIO Query para empreendedorismo

            // Primeiro tenta buscar 1 notícia em destaque
            $newsbusiness = News::where('detach', 'destaque')
                ->where('status', 'published')
                ->whereHas('category', function ($query) {
                    $query->where('name', 'Empreendedorismo');
                })
                ->orderByDesc('id')
                ->take(1)
                ->get();

                if ($newsbusiness->isEmpty()) {
                    $newsbusiness = News::whereHas('category', function ($query) {
                        $query->where('name', 'Empreendedorismo');
                    })
                        ->orderByDesc('id')
                        ->take(1)
                        ->get();
                }

            $newsbusiness2 = News::where('detach', '<>', 'destaque')
                ->whereHas('category', function ($query) {
                    $query->where('name', 'Empreendedorismo');
                })
                ->when(
                    $newsbusiness->isNotEmpty() && $newsbusiness->first()->detach !== 'destaque',
                    function ($query) use ($newsbusiness) {
                        $query->where('id', '<>', $newsbusiness->first()->id);
                    }
                )
                ->orderByDesc('id')
                ->take(3)
                ->get();
        //FIM Query para empreendedorismo

        // Envia para a view
        return view('site.youth.index', compact(
            'newsEducation',
            'newsEducation2',
            'newsSport',
            'newsSport2',
            'newsTech',
            'newsTech2',
            'newsbusiness',
            'newsbusiness2',
        ));
    }
}
