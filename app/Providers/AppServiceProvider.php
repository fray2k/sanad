<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ContactInfo;
use App\Category;

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
        $cont = ContactInfo::first();
        view()->share('contact', $cont);

        // $allcategories=[];
        $allcategories = Category::selection()->with('courses')->has('courses')->get();
        // dd($allcategories);
        // $allcategories= Category::where('id',$item->categoryId)->first();
        view()->share('allcategories', $allcategories);
    }
}
