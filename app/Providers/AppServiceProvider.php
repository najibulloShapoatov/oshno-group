<?php

namespace App\Providers;

use App\Models\SlideShow;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         // frontend
         View::composer('*', function ($view) {

            $view->with([
                'slides' => SlideShow::where('is_active',true)->orderBy('created_at','desc')->get(),
            ]);

        });
    }
}
