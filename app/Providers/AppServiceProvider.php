<?php

namespace App\Providers;

use App\Http\ViewComposers\ProfilComposer;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            ['layouts.main_layouts','layouts.customerLayouts','admin.settings','layouts.visitorLayouts','visitors.contact'],
            ProfilComposer::class
        );
    }
}
