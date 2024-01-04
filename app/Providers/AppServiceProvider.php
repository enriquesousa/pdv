<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        
        // Para convertir a formato money
        // To use it in Blade: @convert($var)
        // $@convert($property->max_price)
        Blade::directive('convert', function ($money) {
            // converts string into float 
            return "<?php echo number_format($money, 2); ?>";
        });

    }
}
