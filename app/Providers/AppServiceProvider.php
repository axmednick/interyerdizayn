<?php

namespace App\Providers;

use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('setting',Setting::find(1));
        View::share('services',Service::all());
        View::share('lastProjects',Project::orderBy('id','desc')->limit(4)->get());

        View::share('partners',Partner::all());
    }
}
