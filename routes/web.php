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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home2', 'HomeController@index')->name('home2');

// Route::resource('backoffice', 'CourseController');

Route::get('/', 'HomeController@home');

Route::get('/home', 'HomeController@home');

Route::get('/login', 'LoginSigninController@Login');
Route::get('/singup', 'LoginSigninController@Singup');

Route::get('/course', 'CourseController@course');
Route::get('/registercourse', 'CourseController@registercourse');
Route::get('/coursedetail', 'CourseController@coursedetail');

Route::get('/portfolio', 'PortfolioController@portfolio');
