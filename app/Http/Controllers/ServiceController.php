<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ServiceController extends Controller
{
    public function show(string $slug)
    {
        return Inertia::render('Service/Show', [
            'service' => Service::query()->where('slug', $slug)->firstOrFail(),
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
