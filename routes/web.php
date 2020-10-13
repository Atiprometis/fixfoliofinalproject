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

 Route::get('/', function () {
     return view('welcome');
 });

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('backoffice', 'BackofficeController');

Route::get('/', 'HomeController@home');

Route::get('/home', 'HomeController@home');

Route::get('/loginsignin', 'LoginSigninController@Login');
Route::get('/singup', 'LoginSigninController@Singup');

Route::resource('/course', 'CourseController');
Route::get('/registercourse', 'CourseController@registercourse');
Route::get('/coursedetail', 'CourseController@coursedetail');

Route::get('/portfolio', 'PortfolioController@portfolio');

Route::get('/institution', 'InstitutionController@institution');
