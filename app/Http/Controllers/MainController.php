<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
    public function index() {
        return Inertia::render('Main/Index', []);
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
    public function reviews() {
        return Inertia::render('Main/Reviews', []);
    }
    public function articles() {
        return Inertia::render('Articles/Index', []);
    }
}
