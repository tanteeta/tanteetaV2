<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'BaseController@viewHome'); 
Route::get('/kids', 'BaseController@viewKids'); 

//function () {return view('welcome');});

/*
*	routes for profile page START
*/
Route::get('/profile/{id}', 'ProfileController@viewProfile');
Route::get('/prof/{id}', 'ProfileController@viewProf');
Route::post('/profile/{id}', 'ProfileController@viewProfile');

//	routes for profile page END

/*
*	routes for course page START
*/
Route::get('/courses', 'CourseController@viewCourses');
Route::get('/course/{id}', 'CourseController@viewCourse');
Route::post('/course/{id}', 'CourseController@viewCourse');
Route::get('/course', 'CourseController@viewCourse');
Route::get('/course2', 'CourseController@viewCourse2');
Route::get('/register', 'CourseController@register');
Route::post('/register', 'CourseController@register');

//	routes for course page END

Route::get('/signup', 'AuthController@viewSignup');
Route::post('/signup', 'AuthController@viewSignup');
Route::get('/login', 'AuthController@viewLogin');
Route::post('/login', 'AuthController@viewLogin');
Route::get('/signout','AuthController@viewSignout');
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/confirm', 'PaymentController@handleGatewayCallback');

//Auth::routes();

//Route::get('/home', 'HomeController@index');
