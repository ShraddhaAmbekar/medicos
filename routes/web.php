<?php

use App\Http\Controllers\backend\CourseController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\SubcourseController;
use App\Http\Controllers\backend\UniversityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
| Filter by Subcourse
*/
Route::any('/filteruniversities/{subcoursecourse}', [HomeController::class, 'filteruniversities'])
    ->name('filter-universities');

/*
| Filter by Country (slug based)
*/
Route::any('/{country:country_slug}', [HomeController::class, 'filteruniversitiesbycountry'])
    ->name('universities.filter');

/*
| University Details (SEO URL)
| /course-slug/university-slug
*/
Route::get('/{course:courses_slug}/{university:university_slug}', [HomeController::class, 'universitydetauls'])
    ->name('about-university');

/*
| Static Pages
*/
Route::get('/apply-now', [HomeController::class, 'appynow'])->name('apply-now');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about-us', [HomeController::class, 'aboutus'])->name('about-us');
Route::get('/privacy-policy', [HomeController::class, 'privacypolicy'])->name('privacy-policy');

/*
| Course wise listing (must be AFTER detail route)
*/
Route::get('/{course:courses_slug}', [HomeController::class, 'subcourselist'])
    ->name('course.show');


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


/*
|--------------------------------------------------------------------------
| Auth Protected Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Countries
    Route::get('/country-list', [CountryController::class, 'index'])->name('countries');
    Route::any('/country-create', [CountryController::class, 'create'])->name('country.create');
    Route::any('/country-update/{country}', [CountryController::class, 'update'])->name('country.update');
    Route::any('/country-delete/{country}', [CountryController::class, 'delete'])->name('country.delete');

    // Courses
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
    Route::any('/courses-update/{course}', [CourseController::class, 'update'])->name('courses.update');
    Route::any('/courses-delete/{course}', [CourseController::class, 'delete'])->name('courses.delete');

    // Subcourses
    Route::get('/subcourses', [SubcourseController::class, 'index'])->name('subcourses.index');
    Route::get('/subcourses/create', [SubcourseController::class, 'create'])->name('subcourses.create');
    Route::post('/subcourses', [SubcourseController::class, 'store'])->name('subcourses.store');
    Route::any('/subcourses-update/{subcourse}', [SubcourseController::class, 'update'])->name('subcourses.update');
    Route::delete('/subcourses/{subcourse}', [SubcourseController::class, 'delete'])->name('subcourses.delete');

    // Universities
    Route::get('/university-list', [UniversityController::class, 'index'])->name('universities.index');
    Route::get('/universities/create', [UniversityController::class, 'create'])->name('universities.create');
    Route::post('/universities-create', [UniversityController::class, 'store'])->name('universities.store');
    Route::get('/universities/{university}/edit', [UniversityController::class, 'edit'])->name('universities.edit');
    Route::delete('/universities/{university}', [UniversityController::class, 'destroy'])->name('universities.delete');

    Route::post('/get-subcourses', [UniversityController::class, 'getSubcourses'])->name('get.subcourses');
});

/*
| Auth Routes
*/
require __DIR__ . '/auth.php';