<?php

namespace App\Providers;

use App\Category;
use App\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('frontend.layout.master', function ($view) {
            $data = Category::with('subcategory')->select('id','category')->get();
            $siteTitle = Setting::select('site_title')->first();
            $logo = DB::table('settings')->select('site_logo')->first();
            $favIcon = DB::table('settings')->select('favicon')->first();
            $address = DB::table('settings')->select('address')->first();
            $facebook = DB::table('settings')->select('facebook_link')->first();
            $twitter = DB::table('settings')->select('twitter_link')->first();
            $instagram = DB::table('settings')->select('instagram_link')->first();
            $linkedIn = DB::table('settings')->select('linkedIn_link')->first();
            $copyright = DB::table('settings')->select('copyright_text')->first();
            $email = DB::table('settings')->select('email')->first();
            $mobile = DB::table('settings')->select('mobile')->first();

            $view->with('siteTitle',$siteTitle)
                  ->with('data',$data)
                  ->with('logo',$logo)
                  ->with('favIcon',$favIcon)
                  ->with('address',$address)
                  ->with('facebook',$facebook)
                  ->with('twitter',$twitter)
                  ->with('instagram',$instagram)
                  ->with('linkedIn',$linkedIn)
                  ->with('linkedIn',$linkedIn)
                  ->with('copyright',$copyright)
                  ->with('email',$email)
                  ->with('mobile',$mobile)
            ;
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
