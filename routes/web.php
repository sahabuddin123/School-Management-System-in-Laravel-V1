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

// Route::get('/', function () {
//     return view('welcome');
// });
// educafe home page
Route::get('/', 'educafeController@showeducafe');
Route::get('/about1', 'educafeController@showeducafeabout');
Route::get('/courses1', 'educafeController@showeducafecourse');
Route::get('/course_details', 'educafeController@showeducafecoursedetails');
Route::get('/our_teachers', 'educafeController@showeducafeteachers');
Route::get('/contact', 'educafeController@showeducafecontact');
Route::get('/contactsubmit', 'educafeController@inserteducafecontact');
Route::get('/showdeatils/{id}','educafeController@show');
Route::get('/deatilscomment','educafeController@comment');
//subcribe
Route::get('/subcribe', 'educafeController@subcribes');
//ragistation
Route::get('/UserRagistation','educafeController@ragistationf');
Route::get('/userragistationdata','educafeController@ragistationsu');
//Login
Route::get('/UserLogin','educafeController@userlogin');
Route::get('/logIncon','educafeController@logInconn');
//enroll
Route::get('/enroll/{id}','educafeController@enroll');

//admission form
 Route::get('/admissionform','educafeController@Admission');
//search admission
Route::get('/searchadmission','educafeController@searchview');
Route::get('/showadmission','educafeController@admissionreports');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('users', 'UserController');
// Route::get('uploadfile','UserController@uploadfile');

// Route::post('uploadfile','UserController@uploadFilePost');
// // web.php
// Route::get('file','FileController@create');
// // Route::post('file','FileController@store');
// Auth::routes();
//dashboard
Route::get('/dashboard', function () {
    return view('/pages_educafe.dashboard');
});
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', function () {
    return view('/login');
});
Route::get ('password/lost','ForgotPasswordController@forgotPassword');

Auth::routes();
//Route::get ('dashboard', 'DashboardController@index');
Route::get ('changepassword', 'UserController@changepassword');
Route::post('updatepassword','UserController@updatePassword');
Route::get ('profile', 'UserController@profile');
//Route::resource ('pages', 'PagesController');
Route::post ('update/{user_id}', 'UserController@updateprofile');
Route::post('changePassword/{user_id}','UserController@updatePassword')->name('changePassword');
Route::get ('user/profile', 'UserController@profile');
Route::get ('main/logout', 'MainController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/geturldata', 'PController@getUrlData');
