<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Faq;
use App\Models\Job;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            //if local register your services you require for development
                $this->app->register('Barryvdh\Debugbar\ServiceProvider');
            } else {
            //else register your services you require for production
                $this->app['request']->server->set('HTTPS', true);
            }
            
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('components.faq', function ($view) {
        //     $view->with('global_faqs', FAQ::orderBy('id', 'desc')->get());
        // });

    }
}
