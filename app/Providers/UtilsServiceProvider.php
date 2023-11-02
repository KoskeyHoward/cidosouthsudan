<?php

namespace App\Providers;
use Exception;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class UtilsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */


    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
    public static function generateCode(): int
    {
        try {
            return random_int(1000, 9999);
        } catch (Exception $e) {
            return 0000;
        }
    }
}
