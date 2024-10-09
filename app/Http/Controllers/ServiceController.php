<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ServiceController extends Controller
{
    public function show(Service $service)
    {
        //dd($service->steps()->get());
        //dd(Storage::disk('public')->url('services/'.$service->image));
        //$service->image = Storage::disk('public')->url('services/'.$service->image);
        return Inertia::render('Service/Show', [
            'service' => $service,
            'steps' => $service->steps()->get()
        ]);
    }
}
