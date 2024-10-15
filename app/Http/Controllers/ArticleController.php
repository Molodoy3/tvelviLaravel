<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Service;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ArticleController extends Controller
{
    public function index() {
        //dd(Service::all());
        return Inertia::render('Articles/Index', [
            'articles' => Article::query()
                ->select('id', 'title', 'description', 'created_at')
                ->orderByDesc('created_at')
                ->paginate(9)
        ]);
    }
    public function show($id) {
        return Inertia::render('Articles/Show', [
            'article' => Article::query()->select('id', 'title', 'description', 'created_at')->find($id)
        ]);
    }
    public function image(Article $article) {
        return response($article->image_file, 200)
            ->header('Content-Type', 'image/png');
    }
}
