<?php

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

Route::get('/', function () { return view('pages.home'); })->name('homepage');
Route::get('/avendre', function () { return view('pages.vendre'); })->name('vendre');
Route::get('/alouer', function () { return view('pages.louer'); })->name('louer');
Route::get('/gestion', function () { return view('pages.gestion'); })->name('gestion');
Route::get('/contact', function () { return view('pages.contact'); })->name('contact');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
