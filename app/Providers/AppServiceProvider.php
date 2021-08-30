<?php

namespace App\Providers;

use App\Models\Footer;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Schema::defaultStringLength(191);
        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
            // $menuOne = Menu::where('id', 1)->get();
            // $menuTwo = Menu::where('id', 2)->get();
            // $menuThree = Menu::where('id', 3)->get();
            // $menuFour = Menu::where('id', 4)->get();
            // $menuFive = Menu::where('id', 5)->get();
            // $menuSix = Menu::where('id', 6)->get();
            $setting = Setting::first();
            $footer = Footer::first();

            // $config['menuOne'] = $menuOne;
            // $config['menuTwo'] = $menuTwo;
            // $config['menuThree'] = $menuThree;
            // $config['menuFour'] = $menuFour;
            // $config['menuFive'] = $menuFive;
            // $config['menuSix'] = $menuSix;
            $config['footer'] = $footer;
            $config['setting'] = $setting;

            View::share('config', $config);
    }
}
