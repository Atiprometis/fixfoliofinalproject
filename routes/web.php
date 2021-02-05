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

Route::get('/courses', 'CourseController@index');


Route::get('/coursedetail/{id}', 'CourseController@viewcoursedetail');

// Route::get('/coursedetail/{id}', 'CourseController@viewcoursedetail');
Route::resource('course-detail', 'CourseController');


// Route::get('/registercourse', function() {
//      return view("course/course-register");
// });

//Route::post('/registercourse', 'CourseregisterController@index');
Route::resource('registercourse', 'CourseregisterController');

Route::resource('/print', 'PrintController');
Route::get('/courseprint', 'CourseregisterController@store');

Route::get('/portfolio', 'PortfolioController@portfolio');
Route::resource('/searchportfolio', 'SearchportfolioController');

Route::resource('/institution', 'InstitutionController');

Route::get('/profileedit', 'PortfolioController@profileedit');

Route::get('/updateprofile', 'PortfolioController@updateprofile');
Route::get('/updateFnameSname', 'PortfolioController@updateFnameSname');
Route::post('/expwork', 'PortfolioController@expwork');

Route::get('/profileinstitution/{school_id}/{countcourse}', 'InstitutionController@profileinstitution');


Route::get('/clicktest', 'TestDataController@index');

Route::get('createtest', 'TestDataController@create');
// Route::get('upload', 'TestDataController@uploadphoto');
Route::get('/test', 'TestDataController@test');
Route::post('/testpost', 'TestDataController@test');
// Route::post('/getmsg', 'TestDataController@test');

Route::resource('/search','InstitutionController');

Route::get('/addid', 'UploadImagesController@create');

Route::post('/upload', 'UploadImagesController@store');
Route::get('/destroyImagecourses/{course_final_id}', 'CreateCourseFinalController@destroyImagecourses');
// Route::get('/delete/{deleteid}', function($id){});

Route::post('filecourse/{course_final_id}', 'CreateCourseFinalController@store');

Route::post('/addExpp', 'CreateCourseFinalController@create');

Route::post('/testexp', 'CreateCourseFinalController@test');

Route::get('/dashbord', 'DashbordController@index');
Route::get('/dashcourse', 'DashbordController@dashcourse');

Route::get('/dashcreatecourse', 'DashbordController@dashcreatecourse');
Route::post('/createcourse_detail', 'DashbordController@passDatatoCoursedetail');

Route::post('/aboutcourse', 'DashbordController@aboutcourse')->name('aboutcourse');
Route::get('/manegercourse', 'DashbordController@manegerCourse');

Route::get('/deletecourse/{id}', 'DashbordController@deletecourse' );

Route::get('/editcourse/{id}', 'Dashborad\EditcourseController@index' );
Route::get('/changeAboutCourse', 'Dashborad\EditcourseController@changeAboutCourse' );
Route::get('/editcourse/{id}/date', 'Dashborad\EditcourseController@detecourse' );
Route::get('/changeDate', 'Dashborad\EditcourseController@changeDate' );
Route::get('/editcourse/{id}/detail', 'Dashborad\EditcourseController@detailcourse' );
Route::get('/changeAboucourse', 'Dashborad\EditcourseController@changeAboucourse' );
Route::get('/editcourse/{id}/image', 'Dashborad\EditcourseController@imagecourse' );

Route::get('/admin', 'Admin\AdminController@index' );
Route::get('/showschool', 'Admin\AdminController@showschool' );

Route::get('/addschool', 'Admin\AdminController@addschool' );
Route::get('/addNewschool', 'Admin\AdminController@addNewschool' );
Route::get('/deleteschool/{id}', 'Admin\AdminController@deleteschool' );

Route::get('/approvecourse', 'Admin\AdminController@approvecourse' );
Route::get('/approve/{id}', 'Admin\AdminController@approve' );

