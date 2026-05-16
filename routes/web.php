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
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/courses/{course}', [HomeController::class, 'subcourselist'])->name('course.show');
Route::any('/filteruniversities/{subcoursecourse}', [HomeController::class, 'filteruniversities'])->name('filter-universities');
Route::any('/filter-universities/{country}', [HomeController::class, 'filteruniversitiesbycountry'])->name('universities.filter');
Route::get('/choose-your-university/{slug}', [HomeController::class, 'universitydetauls'])->name('about-university');
Route::get('/apply-now',[HomeController::class, 'appynow'])->name('apply-now');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/about-us',[HomeController::class, 'aboutus'])->name('about-us');
Route::get('/privacy-policy',[HomeController::class, 'privacypolicy'])->name('privacy-policy');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // countries
    Route::get('/country-list', [CountryController::class, 'index'])->name('countries');
    Route::any('/country-create', [CountryController::class, 'create'])->name('country.create');
    Route::any('/country-update/{country}', [CountryController::class, 'update'])->name('country.update');
    Route::any('/country-delete/{country}', [CountryController::class, 'delete'])->name('country.delete');
    // course 
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
    Route::any('/courses-update/{course}', [CourseController::class, 'update'])->name('courses.update');
    Route::any('/courses-delete/{course}', [CourseController::class, 'delete'])->name('courses.delete');

    // subcourse 
    Route::get('/subcourses', [SubcourseController::class, 'index'])->name('subcourses.index');
    Route::get('/subcourses/create', [SubcourseController::class, 'create'])->name('subcourses.create');
    Route::post('/subcourses', [SubcourseController::class, 'store'])->name('subcourses.store');
    Route::any('/subcourses-update/{subcourse}', [SubcourseController::class, 'update'])->name('subcourses.update');
    Route::delete('/subcourses/{subcourse}', [SubcourseController::class, 'delete'])->name('subcourses.delete');

    // universities 
    Route::get('/university-list', [UniversityController::class, 'index'])->name('universities.index');
    Route::get('/universities/create', [UniversityController::class, 'create'])->name('universities.create');
    Route::post('/universities-create', [UniversityController::class, 'store'])->name('universities.store');
    Route::get('/universities/{university}/edit', [UniversityController::class, 'edit'])->name('universities.edit');
    // Route::put('/universities/{university}', [UniversityController::class, 'update'])->name('universities.update');
    Route::delete('/universities/{university}', [UniversityController::class, 'destroy'])->name('universities.delete');

    Route::post('/get-subcourses', [UniversityController::class, 'getSubcourses'])->name('get.subcourses');
});

require __DIR__ . '/auth.php';
