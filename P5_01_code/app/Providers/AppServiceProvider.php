<?php

namespace App\Providers;

use App\roles;
use App\Http\ViewComposers\{StreamerComposer, MembersListComposer};
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        view()->composer('front/layouts/streamerList', StreamerComposer::class);
        view()->composer('front/layouts/membersList', MembersListComposer::class);
    }
}
