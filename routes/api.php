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

Route::middleware('auth:api')->get('user', 'API\AuthController@user_detail');
Route::post('login', 'API\AuthController@login');
Route::post('register', 'API\AuthController@register');
Route::resource('readings', 'ReadingController');
Route::resource('questionexams', 'QuestionExamController');
Route::get('test', 'TestController@create');
Route::get('data', 'DataController@speedComprehension');

Route::put('abstract/{id}', 'ExamController@setAbstract');

Route::group(['middleware' => ['auth:api']], function () {
    Route::post('test', 'TestController@create');
    Route::post('data', 'DataController@speedComprehension');
});
