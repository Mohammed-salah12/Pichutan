<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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





Route::get('/user/login', [AuthController::class, 'showLoginForm'])->name('user.login')->middleware('guest');
Route::post('/user/login', [AuthController::class, 'login'])->name('user.login.post')->middleware('guest');
Route::get('/user/register', [AuthController::class, 'showRegistrationForm'])->name('user.register')->middleware('guest');
Route::post('/user/register', [AuthController::class, 'register'])->name('user.register.post')->middleware('guest');
Route::post('/user/logout', [AuthController::class, 'logout'])->name('user.logout');
Route::get('/', function () {
    return view('front.home');
})->name('/');

Route::group(['prefix' => 'cms'], function () {

    Route::get('blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');

    Route::group(['middleware' => ['auth:website-user']], function () {
        Route::get('create/blog', [\App\Http\Controllers\BlogController::class, 'create'])->name('createblog');
        Route::post('create/blog', [\App\Http\Controllers\BlogController::class, 'store'])->name('storeblog');
        Route::get('blog/{id}/edit', [\App\Http\Controllers\BlogController::class, 'edit'])->name('editblog');
        Route::put('blog/{id}', [\App\Http\Controllers\BlogController::class, 'update'])->name('updateblog');
        Route::get('blog/{id}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
    });

    Route::get('contact', function () {
        return view('front.contact');
    })->name('contact');

    Route::get('about', function () {
        return view('front.about');
    })->name('about');

    Route::get('partners/sponsors', function () {
        return view('front.portfolio');
    })->name('portfolio');

    Route::get('join/team', function () {
        return view('front.services');
    })->name('services');

    Route::get('social/media', function () {
        return view('front.socials');
    })->name('socials');
});


Route::post('contacts', [\App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');
