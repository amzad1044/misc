<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Category;
use App\Contact;
use App\Page;
use View;

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
        Schema::defaultStringLength('191');

        View::composer('front.include.sideCat',function($view){
            $view->with('categories',Category::where('status',1)->orderBy('id','desc')->get());
        });

        View::composer('front.include.header',function($view){
            $view->with('pages',Page::where('status',1)->get());
        });

        //admin category
        View::composer('admin.include.sidebar',function($view){
            $view->with('categories',Category::orderBy('id','desc')->paginate(10));
        });
        //Message in admin
        View::composer('admin.include.header',function($view){
            $view->with('contacts',Contact::orderBy('id','desc')->get()->take(4));    
        });
    }
}
