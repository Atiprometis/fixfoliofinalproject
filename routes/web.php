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
Route::post('/coursespost', 'CourseController@store');

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

Route::post('/updateprofile', 'PortfolioController@updateprofile');
Route::get('/updateFnameSname', 'PortfolioController@updateFnameSname');
Route::post('/expwork', 'PortfolioController@expwork');
Route::post('/expworkUpdate', 'PortfolioController@expworkUpdate');

Route::get('/profileinstitution/{schools_id}', 'InstitutionController@profileinstitution');


Route::get('/clicktest', 'TestDataController@index');

Route::get('createtest', 'TestDataController@create');
// Route::get('upload', 'TestDataController@uploadphoto');
Route::get('/test', 'TestDataController@test');
Route::post('/testpost', 'TestDataController@test');
// Route::post('/getmsg', 'TestDataController@test');

Route::resource('/search','InstitutionController');

Route::get('/addid', 'UploadImagesController@create');
Route::post('/addidAthome', 'PortfolioController@create');

Route::post('/upload', 'UploadImagesController@store');
Route::post('uploadimageschool', 'UploadImagesController@uploadImageschool')->middleware('admin');
Route::get('/destroyImagecourses/{course_final_id}', 'CreateCourseFinalController@destroyImagecourses');
Route::get('/destroyResult/{course_final_id}', 'CreateCourseFinalController@destroyResult');
Route::get('/destroyExpwork/{exp_works_id}', 'CreateCourseFinalController@destroyExpwork');
// Route::get('/delete/{deleteid}', function($id){});

Route::post('updateresult', 'CreateCourseFinalController@store');

Route::post('/addExpp', 'CreateCourseFinalController@create');

Route::post('/testexp', 'CreateCourseFinalController@test');

Route::get('/dashbord', 'DashbordController@index')->middleware('admin');
Route::get('/dashcourse', 'DashbordController@dashcourse')->middleware('admin');

Route::get('/dashcreatecourse', 'DashbordController@dashcreatecourse')->middleware('admin');
Route::post('/createcourse_detail', 'DashbordController@passDatatoCoursedetail')->middleware('admin');

Route::post('/aboutcourse', 'DashbordController@aboutcourse')->name('aboutcourse')->middleware('admin');
Route::get('/manegercourse', 'DashbordController@manegerCourse')->middleware('admin');

Route::get('/deletecourse/{id}', 'DashbordController@deletecourse' )->middleware('admin');

Route::get('/editcourse/{id}', 'Dashborad\EditcourseController@index' )->middleware('admin');
Route::get('/changeAboutCourse', 'Dashborad\EditcourseController@changeAboutCourse' )->middleware('admin');
Route::get('/editcourse/{id}/date', 'Dashborad\EditcourseController@detecourse' )->middleware('admin');
Route::get('/changeDate', 'Dashborad\EditcourseController@changeDate' )->middleware('admin');
Route::get('/editcourse/{id}/detail', 'Dashborad\EditcourseController@detailcourse' )->middleware('admin');
Route::get('/changeAboucourse', 'Dashborad\EditcourseController@changeAboucourse' )->middleware('admin');
Route::get('/editcourse/{id}/image', 'Dashborad\EditcourseController@imagecourse' )->middleware('admin');
Route::post('editimage', 'Dashborad\EditcourseController@editImage' )->middleware('admin');
Route::post('editDataschool', 'DashbordController@editDataschool' )->middleware('admin');

Route::get('/admin', 'Admin\AdminController@index' )->middleware('superadmin');
Route::get('/showschool', 'Admin\AdminController@showschool' )->middleware('superadmin');

Route::get('/addschool', 'Admin\AdminController@addschool' )->middleware('superadmin');
Route::get('/addNewschool', 'Admin\AdminController@addNewschool' )->middleware('superadmin');
Route::get('/deleteschool/{id}', 'Admin\AdminController@deleteschool' )->middleware('superadmin');

Route::get('/approvecourse', 'Admin\AdminController@approvecourse' )->middleware('superadmin');
Route::get('/approve/{id}', 'Admin\AdminController@approve' )->middleware('superadmin');
Route::get('/approveadmin', 'Admin\AdminController@approveadmin' )->middleware('superadmin');
Route::post('setadmin', 'Admin\AdminController@setadmin' )->middleware('superadmin');
Route::post('deleteadmin/{id_user}', 'Admin\AdminController@deleteadmin' )->middleware('superadmin');
