<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Review;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
    public function index() {
        return Inertia::render('Main/Index', [
            'lastArticles' => Article::query()->orderByDesc('created_at')->take(3)->get(),
            'lastReviews' => Review::query()->orderByDesc('created_at')->take(4)->get(),
        ]);
    }
    public function about() {
        return Inertia::render('Main/About', []);
    }
    public function portfolio() {
        return Inertia::render('Main/Portfolio', []);
    }
    public function contacts() {
        return Inertia::render('Main/Contacts', []);
    }
}
