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
|/*
|--------------------------------------------------------------------------
| SEO Redirects
|--------------------------------------------------------------------------
*/

// Courses
Route::redirect('/courses/2', '/mbbs-in-abroad', 301);
Route::redirect('/courses/1', '/engineering-abroad', 301);
Route::redirect('/courses/5', '/commerce-abroad', 301);
Route::redirect('/courses/3', '/business-and-management-abroad', 301);

// Countries
Route::redirect('/filter-universities/8', '/mbbs-in-georgia', 301);
Route::redirect('/filter-universities/11', '/mbbs-in-uzbekistan', 301);
Route::redirect('/filter-universities/9', '/mbbs-in-serbia', 301);
Route::redirect('/filter-universities/10', '/mbbs-in-romania', 301);
Route::redirect('/filter-universities/12', '/mbbs-in-russia', 301);
Route::redirect('/filter-universities/13', '/mbbs-in-kazakhstan', 301);
Route::redirect('/filter-universities/14', '/mbbs-in-krygyzstan', 301);
Route::redirect('/filter-universities/15', '/mbbs-in-bangladesh', 301);
Route::redirect('/filter-universities/16', '/mbbs-in-canada', 301);
Route::redirect('/filter-universities/17', '/mbbs-in-poland', 301);
Route::redirect('/filter-universities/18', '/mbbs-in-italy', 301);
Route::redirect('/filter-universities/19', '/mbbs-in-spain', 301);
Route::redirect('/filter-universities/20', '/mbbs-in-germany', 301);
Route::redirect('/filter-universities/21', '/mbbs-in-china', 301);
Route::redirect('/filter-universities/22', '/mbbs-in-belarus', 301);
Route::redirect('/filter-universities/23', '/mbbs-in-hungary', 301);
Route::redirect('/filter-universities/24', '/mbbs-in-latvia', 301);
Route::redirect('/filter-universities/25', '/mbbs-in-lithuania', 301);
Route::redirect('/filter-universities/26', '/mbbs-in-malaysia', 301);
Route::redirect('/filter-universities/27', '/mbbs-in-mauritius', 301);
Route::redirect('/filter-universities/28', '/mbbs-in-moldova', 301);
Route::redirect('/filter-universities/29', '/mbbs-in-slovakia', 301);
Route::redirect('/filter-universities/30', '/mbbs-in-nepal', 301);

// Georgia Universities
Route::redirect('/choose-your-university/kutaisi-university-faculty-of-medicine-Kutaisi', '/mbbs-in-georgia/kutaisi-university', 301);
Route::redirect('/choose-your-university/kutaisi-university-faculty-of-medicine', '/mbbs-in-georgia/central-university-of-europe-tbilisi-campus', 301);
Route::redirect('/choose-your-university/european-university', '/mbbs-in-georgia/european-university', 301);
Route::redirect('/choose-your-university/caucasus-international-university', '/mbbs-in-georgia/caucasus-international-university', 301);
Route::redirect('/choose-your-university/east-european-university-faculty-of-healthcare-sciences', '/mbbs-in-georgia/east-european-university-faculty-of-healthcare-sciences', 301);
Route::redirect('/choose-your-university/east-west-university', '/mbbs-in-georgia/east-west-university', 301);
Route::redirect('/choose-your-university/georgian-national-university-seu', '/mbbs-in-georgia/georgian-national-university-seu', 301);
Route::redirect('/choose-your-university/greenheart-medical-university-school-of-medicine', '/mbbs-in-georgia/greenheart-medical-university-school-of-medicine', 301);
Route::redirect('/choose-your-university/american-international-school-of-medicine', '/mbbs-in-georgia/american-international-school-of-medicine', 301);
Route::redirect('/choose-your-university/teaching-university-geomedi-faculty-of-medicine', '/mbbs-in-georgia/teaching-university-geomedi-faculty-of-medicine', 301);
Route::redirect('/choose-your-university/tbilisi-state-medical-university-faculty-of-medicine', '/mbbs-in-georgia/tbilisi-state-medical-university-faculty-of-medicine', 301);
Route::redirect('/choose-your-university/petre-shotadze-tbilisi-medical-academy-faculty-of-medicine', '/mbbs-in-georgia/petre-shotadze-tbilisi-medical-academy-faculty-of-medicine', 301);
Route::redirect('/choose-your-university/new-vision-university-school-of-medicine', '/mbbs-in-georgia/new-vision-university-school-of-medicine', 301);
Route::redirect('/choose-your-university/ivane-javakhishvili-tbilisi-state', '/mbbs-in-georgia/ivane-javakhishvili-tbilisi-state', 301);
Route::redirect('/choose-your-university/grigol-robakidze-university', '/mbbs-in-georgia/grigol-robakidze-university', 301);
Route::redirect('/choose-your-university/bau-international-university-batumi', '/mbbs-in-georgia/bau-international-university-batumi', 301);
Route::redirect('/choose-your-university/david-tvildiani-medical-university', '/mbbs-in-georgia/david-tvildiani-medical-university', 301);
Route::redirect('/choose-your-university/batumi-shota-rustaveli-state-university', '/mbbs-in-georgia/batumi-shota-rustaveli-state-university', 301);
Route::redirect('/choose-your-university/akaki-tsereteli-state-university', '/mbbs-in-georgia/akaki-tsereteli-state-university', 301);
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
