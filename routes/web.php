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

Route::get('/ghgcjhdscds', function () {
    return view('welcome');
});

Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Admin\DashBoardController@index');

Route::get('home', 'Admin/DashBoardController@index');




  Route::get('instructor-login', 'Auth\InstructorLoginController@UserLogin')->name('instructor-login');
  Route::post('instructorlogin', 'Auth\InstructorLoginController@LoginUser')->name('instructorlogin');
  Route::post('signoutinstructors', 'Auth\InstructorLoginController@signOutInstructors')->name('signoutinstructors');

    
    Route::get('forgot/password', 'Auth\UserLoginController@forgotPassword');
    Route::post('forgot/password', 'Auth\UserLoginController@submitForgot')->name('forgot.password.post');
        
    Route::get('reset-user-password/{token}', 'Auth\InstructorLoginController@resetUserPasswordGet')->name('reset-user-password');
    Route::post('reset-user-password', 'Auth\InstructorLoginController@resetUserPasswordPost')->name('reset-user-password.post');
        
        
  Route::get('reset-password-api/{token}', 'Auth\InstructorLoginController@resetPasswordGetApi')->name('reset-password-api');
  Route::post('reset-password-api', 'Auth\InstructorLoginController@resetPasswordPostApi')->name('reset-password-post-api');
        
        
        
  Route::post('signoutotudent', 'Auth\UserLoginController@signOutStudent')->name('signoutotudent');

  
  Route::get('instructor-signup', 'Auth\InstructorLoginController@instructorSignup')->name('instructor-signup');
  Route::get('student-signup', 'Auth\InstructorLoginController@studentSignup')->name('student-signup');
  Route::get('/activation/users/{token}', 'Auth\InstructorLoginController@instructorActivation');

  Route::post('create/acount', 'Auth\InstructorLoginController@registerNewUser')->name('create.acount');

  Route::post('register-new-instructor', 'Auth\InstructorLoginController@registerNewInstructor')->name('register-new-instructor');

