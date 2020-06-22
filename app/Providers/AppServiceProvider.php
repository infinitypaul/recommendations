<?php

namespace App\Providers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @param \Illuminate\Routing\UrlGenerator $url
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        JsonResource::withoutWrapping();
        if ($this->app->environment() == 'production') {
            $url->forceScheme('https');
            //Force URL to use HTTPS
        }
    }
}
