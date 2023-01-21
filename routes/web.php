<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\ImgController;
use App\Http\Controllers\FpedController;
use App\Http\Controllers\MpedController;
use App\Http\Controllers\ContactUsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () { return view('about'); });
Route::get('/upcoming', function () { return view('upcoming'); });
Route::get('/shownews', function () { return view('shownews'); });
Route::get('/adults', function () { return view('adults'); });
Route::get('/boys', function () { return view('our_boys'); });
Route::get('/girls', function () { return view('our_girls'); });
Route::get('/greets', function () { return view('greets'); });
Route::get('/retired',[DogController::class,'retired'])->name('retired');
Route::get('/rb_boys',[DogController::class,'rbboys'])->name('rb_boys');
Route::get('/rb_girls',[DogController::class,'rbgirls'])->name('rb_girls');
Route::get('/dog/{dog}',[DogController::class,'dogg'])->name('dogg');
Route::get('/show/{dog}',[DogController::class,'show'])->name('show');

Route::get('/contact-form',[ContactUsController::class, 'showForm'])->name('contact');
Route::post('/contact-form', [ContactUsController::class, 'storeForm'])->name('contact.save');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('dogs', DogController::class);
    Route::resource('img', ImgController::class);
    Route::resource('fped', FpedController::class);
    Route::resource('mped', MpedController::class);

    Route::get('/contacts',[ContactUsController::class, 'index'])->name('contacts');
});
