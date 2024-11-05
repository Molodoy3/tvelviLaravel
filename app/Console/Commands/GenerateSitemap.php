<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\Service;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // инструкция тут https://dev.to/laraveltuts/how-to-automatically-generate-an-xml-sitemap-in-laravel-om4
        // sail artisan app:generate-sitemap

        // для новостей нужна структура xml, которую этот плагин не способен генерировать, можно попробовать cviebrock/laravel-news-sitemap
        // https://github.com/cviebrock/laravel-news-sitemap

        $sitemap = Sitemap::create();

        $sitemap->add(Url::create("/")->setLastModificationDate(now())->setPriority(1));
        $sitemap->add(Url::create("/about")->setLastModificationDate(now()));
        $sitemap->add(Url::create("/portfolio")->setLastModificationDate(now()));
        $sitemap->add(Url::create("/contacts")->setLastModificationDate(now()));
        $sitemap->add(Url::create("/privacy-agreement")->setLastModificationDate(now()));
        $sitemap->add(Url::create("/privacy")->setLastModificationDate(now()));
        $sitemap->add(Url::create("/reviews")->setLastModificationDate(now()));
        $sitemap->add(Url::create("/articles")->setLastModificationDate(now()));
        Service::get()->each(function (Service $service) use ($sitemap) {
            $sitemap->add(
              Url::create("/{$service->slug}")
                ->setLastModificationDate(now())
                ->setPriority(0.8)
            );
        });
        Service::get()->each(function (Service $service) use ($sitemap) {
            $sitemap->add(
                Url::create("/{$service->slug}/order")
                    ->setLastModificationDate(now())
                    ->setPriority(0.8)
            );
        });
        Article::get()->each(function (Article $article) use ($sitemap) {
            $sitemap->add(
                Url::create("article/{$article->id}")
                    ->setLastModificationDate(now())
                    ->setPriority(0.8)
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
