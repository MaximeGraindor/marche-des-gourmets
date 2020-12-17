<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Contact;
use Illuminate\Support\Facades\Route;

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

Route::get('/qui-sommes-nous', [About::class, 'show'])
    ->template(\App\Nova\Templates\About::class)
    ->name('about');

Route::view('/exposants', 'pages.exhibitors')->name('exhibitors');
Route::view('/informations-pratiques', 'pages.informations')->name('informations');

Route::get('/contact', [Contact::class, 'show'])
    ->template(\App\Nova\Templates\Contact::class)
    ->name('contact');

Route::view('/billeterie', 'pages.ticketing')->name('ticketing');
