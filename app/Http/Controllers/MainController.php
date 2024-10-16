<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Review;
use Illuminate\Http\Request;
use Inertia\Inertia;
//use Spatie\Sitemap\SitemapGenerator;

class MainController extends Controller
{
    /*public function index() {
        return Inertia::render('Main/Index', [
            'lastArticles' => Article::query()->orderByDesc('created_at')->take(3)->get(),
            'lastReviews' => Review::query()->orderByDesc('created_at')->take(4)->get()
        ]);
    }*/
    public function getLastNew()
    {
        $token = "6517915665:AAE1msth-dyzOQrikWk2DtE_-LvEARu8XwM";
        //$content = file_get_contents("php://input");
        //$update = json_decode($content, true);

        $url = "https://api.telegram.org/bot" . $token . '/sendMessage?chat_id=' . 992083441 . '&text=здорова задолбал';
        file_get_contents($url);
    }
    public function test()
    {
        $token = "6517915665:AAE1msth-dyzOQrikWk2DtE_-LvEARu8XwM";
        $channel_id = "1002393225294"; // ID вашего канала
        $webhook_url = "https://tvelvi.com/get_last_new"; // URL вашего вебхука

        // Устанавливаем вебхук

        file_get_contents("https://api.telegram.org/bot$token/setWebhook?url=$webhook_url");

    }
    public function about() {
        //Sitema
        //SitemapGenerator::create(config('app.url'))->writeToFile(public_path('sitemap.xml'));
        //dd(SitemapGenerator::create('https://tvelvi.com')->getSitemap()->writeToDisk('public', 'sitemap.xml', true));

        return Inertia::render('Main/About', [
            'lastReviews' => Review::query()->orderByDesc('created_at')->take(4)->get()
        ]);
    }
    public function portfolio() {
        return Inertia::render('Main/Portfolio', []);
    }
    public function contacts() {
        return Inertia::render('Main/Contacts', []);
    }
    public function privacyAgreement() {
        return Inertia::render('Main/PrivacyAgreement', []);
    }
    public function privacy() {
        return Inertia::render('Main/Privacy', []);
    }
}
