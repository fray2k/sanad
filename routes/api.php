<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['api'], 'namespace' => 'Api'], function () {
    Route::get('/admin', function () {
        return 'bbbb';
    });
   
    Route::post('login', 'AuthController@login');
  	Route::post('register', 'AuthController@register');
    Route::post('forget-password', 'AuthController@forgetPassword');
    Route::post('profile-update', 'AuthController@profileUpdate');
    Route::get('user-data', 'AuthController@getUserData');
    Route::get('all-courses', 'AuthController@allcourses');
    Route::get('allcourses-lives', 'AuthController@allcoursesLive');
    Route::post('change_password', 'AuthController@change_password');
    Route::post('forgetpassword', 'AuthController@forgetPassword');







    Route::get('favorites', 'HomeController@favorites');
    Route::get('vendor-products', 'HomeController@vendorProducts');
    
    Route::get('settings', 'HomeController@settings');
    Route::post('add-product', 'HomeController@addProduct');
    Route::post('add-favorite', 'HomeController@addFavorite');
    Route::post('delete-favorite', 'HomeController@deleteFavorite');

});
