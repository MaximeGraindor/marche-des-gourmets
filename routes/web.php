<?php

use App\Nova\Templates\Home;
use App\Nova\Templates\About;
use App\Nova\Templates\Informations;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlbumController;
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

Route::get('/', [HomeController::class, 'show'])
    ->template(\App\Nova\Templates\Home::class)
    ->name('home');



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

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/billeterie', [CheckoutController::class, 'index'])
    ->template(\App\Nova\Templates\Ticketing::class)
    ->name('ticketing');

Route::post('checkout', [CheckoutController::class, 'checkout']);

Route::get('/album/{album}', [AlbumController::class, 'show'])->name('album.show');
