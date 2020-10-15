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


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function(){
    return redirect('/home');
});

Route::resource('backoffice', 'BackofficeController');

//Route::resource('/', 'HomeController');

Route::resource('/home', 'HomeController');
Route::get('/test', 'HomeController@test');

Route::get('/loginsignin', 'LoginSigninController@Login');
Route::get('/singup', 'LoginSigninController@Singup');

Route::resource('/course', 'CourseController');
Route::get('/registercourse', 'CourseController@registercourse');
Route::get('/coursedetail', 'CourseController@coursedetail');

Route::get('/portfolio', 'PortfolioController@portfolio');
Route::get('/searchportfolio', 'PortfolioController@searchportfolio');

Route::get('/institution', 'InstitutionController@institution');
Route::get('/profileinstitution', 'InstitutionController@profileinstitution');
