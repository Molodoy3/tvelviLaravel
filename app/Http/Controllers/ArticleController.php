<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ArticleController extends Controller
{
    public function index() {
        //dd(Article::all());
        return Inertia::render('Articles/Index', [
            'articles' => Article::query()
                ->orderByDesc('created_at')
                ->paginate(9)
        ]);
    }
    public function show(Article $article) {
        return Inertia::render('Articles/Show', [
            'article' => $article
        ]);
    }
}
