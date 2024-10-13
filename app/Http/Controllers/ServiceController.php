<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ServiceController extends Controller
{
    public function show(string $slug = "")
    {
        //по умолчанию мобилка(первая запись в таблице) главная
        if ($slug == "")
            $slug = Service::query()->first()->slug;

        return Inertia::render('Service/Show', [
            'service' => Service::query()->where('slug', $slug)->firstOrFail(),
            'lastArticles' => Article::query()->orderByDesc('created_at')->take(3)->get(),
            'lastReviews' => Review::query()->orderByDesc('created_at')->take(4)->get()
        ]);
    }
    public function showOrder(string $slug)
    {
        $service = Service::query()->where('slug', $slug)->firstOrFail();
        //dd($service);
        return Inertia::render('Service/ShowOrder', [
            'service' => $service,
            'steps' => $service->steps()->get()
        ]);
    }
}
