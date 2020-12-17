<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
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
Route::get('/', function () {
    return redirect('/home');
});

Route::resource('backoffice', 'BackofficeController');
Route::resource('createCourseDetail', 'CreateCourseDetailController');

//Route::resource('/', 'HomeController');

Route::resource('/home', 'HomeController');
// Route::get('/test', 'HomeController@test');

Route::get('/loginsignin', 'LoginSigninController@Login');
Route::get('/singup', 'LoginSigninController@Singup');

Route::resource('/course', 'CourseController');

Route::get('/coursedetail', 'CourseController@coursedetail');

// Route::get('/registercourse', function() {
//      return view("course/course-register");
// });

Route::get('/registercourse', 'CourseregisterController@registercourse');

Route::get('/test', 'CourseregisterController@test');

// Route::get('/registercourse', 'CourseController@registercourse');

Route::resource('/print', 'PrintController');

Route::get('/registercourse', function () {
    return view('course/course-register');
});

Route::get('/portfolio', 'PortfolioController@portfolio');
Route::resource('/searchportfolio', 'SearchportfolioController');

Route::resource('/institution', 'InstitutionController');

Route::get('/profileedit/{user_id}', 'PortfolioController@profileedit');

Route::get('/updateprofile/{id}', 'PortfolioController@updateprofile');


Route::get('/profileinstitution/{school_id}/{countcourse}', 'InstitutionController@profileinstitution');


Route::get('/clicktest', 'TestDataController@index');

Route::get('createtest', 'TestDataController@create');
// Route::get('upload', 'TestDataController@uploadphoto');
Route::get('test', 'TestDataController@test');

Route::resource('/search','InstitutionController');

Route::get('/upload/create', 'UploadImagesController@create');
Route::post('/upload', 'UploadImagesController@store');

Route::post('filecourse', 'CreateCourseFinalController@store');
