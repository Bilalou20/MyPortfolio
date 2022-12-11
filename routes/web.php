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

Route::get('/',function (){
    return view('welcome');
    $viewData = [];
    $viewData["title"] ="Home Page - MyPortfolio";
    return view('home.index')->with("viewData", $viewData);
});
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/', 'App\Http\Controllers\CvController@index')->name("home.index");
Route::get('/cv', 'App\Http\Controllers\CvController@cv')->name("home.cv");
Route::get('/', 'App\Http\Controllers\ContactController@index')->name("home.index");
Route::get('/contact', 'App\Http\Controllers\ContactController@contact')->name("home.contact");