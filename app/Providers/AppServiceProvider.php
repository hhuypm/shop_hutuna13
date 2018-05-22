<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\PRODUCT_TYPE;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('master',function($view){
            $product_type = PRODUCT_TYPE::where('TYPE_PARENT',null)->get();
            $pro_type =PRODUCT_TYPE::where('TYPE_PARENT','<>',null)->get();
            $view->with('product_type',$product_type);
            $view->with('pro_type',$pro_type);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
