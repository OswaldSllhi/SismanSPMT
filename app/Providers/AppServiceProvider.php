<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use App\Models\Iso14001;
use App\Models\Iso37001;
use App\Models\Iso45001;
use App\Models\Iso9001;
use App\Models\ISPS;
use App\Observers\Iso9001Observer;
use App\Services\CertificateNotificationService;
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
    //     view()->composer('*', function () {
    //     if (Auth::check()) {
    //         $user = Auth::user();
    //         $service = new CertificateNotificationService();

    //         $service->checkAndNotify($user, [
    //             Iso9001::class,
    //             Iso14001::class,
    //             Iso45001::class,
    //             Iso37001::class,
    //             ISPS::class,
    //         ]);
    //     }
    // });
    }
}
