<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Paginator::useBootstrapFive();

        // Rende le categorie sempre disponibili in ogni vista (inclusa la navbar)
        View::composer('*', function ($view) {
            $view->with('categories', Category::all());
        });
    }
}