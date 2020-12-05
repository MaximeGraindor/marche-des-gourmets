<?php

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
Route::view('/qui-sommes-nous', 'pages.about')->name('about');
Route::view('/exposants', 'pages.exhibitors')->name('exhibitors');
Route::view('/informations-pratique', 'pages.informations')->name('informations');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/billeterie', 'pages.ticketing')->name('ticketing');
