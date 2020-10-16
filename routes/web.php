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
Route::get('/', function(){
    return redirect('/home');
});

Route::resource('backoffice', 'BackofficeController');

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

Route::get('/registercourse/print', 'PrintController@print');

Route::get('/registercourse', function () {
    return view('course/course-register');
});


Route::post('print', function (Request $request) {
    $name = $request->input('name');
    $lastname = $request->input('lastname');
    $data = array(
        'name' => $name,
        'lastname' => $lastname,
    );

    return view("print/print",$data);
});





Route::get('/portfolio', 'PortfolioController@portfolio');
Route::get('/searchportfolio', 'PortfolioController@searchportfolio');

Route::resource('/institution', 'InstitutionController');
Route::get('/profileinstitution', 'InstitutionController@profileinstitution');


