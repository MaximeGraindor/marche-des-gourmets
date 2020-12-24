<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ExhibitorController;
use App\Http\Controllers\InformationsController;

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

Route::view('/', 'home')->name('home');

Route::get('/qui-sommes-nous', [AboutController::class, 'show'])
    ->template(\App\Nova\Templates\About::class)
    ->name('about');

Route::get('/exposants', [ExhibitorController::class, 'index'])->name('exhibitors');
Route::post('/exposants', [ExhibitorController::class, 'store']);

Route::get('/informations-pratiques', [InformationsController::class, 'show'])
    ->template(\App\Nova\Templates\Informations::class)
    ->name('informations');

Route::get('/contact', [ContactController::class, 'show'])
    ->template(\App\Nova\Templates\Contact::class)
    ->name('contact');

Route::get('/billeterie', [CheckoutController::class, 'index'])->name('ticketing');
