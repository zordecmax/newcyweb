<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\QuestionsAndAnswersController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', [PageController::class, 'index'])->name('home');
    Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/services', [PageController::class, 'services'])->name('services');

    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/questions-and-answers', [FaqController::class, 'index'])->name('questions-and-answers.index');


    Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
