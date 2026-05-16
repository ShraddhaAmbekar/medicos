<?php

namespace App\Providers;

use App\Models\Country;
use App\Models\Course;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        View::composer('frontend.layouts.master', function ($view) {
            $courses = Course::orderBy('course_name', 'DESC')->get();
            $countries = Country::orderBy('id', 'ASC')->get();
            $view->with('courses', $courses)->with('countries', $countries);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
