<?php

use Illuminate\Http\Request;

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

Route::get('/apicoba', function(){
	return 'ok';
});

Route::post('/register', 'api\AuthController@register');
Route::post('/login', 'api\AuthController@login');

Route::group(['middleware' => 'api'], function() {
    Route::get('/logout', 'api\AuthController@logout');
    Route::get('/class', 'api\UserController@class');
    Route::get('/course/{id}', 'api\UserController@course');
    Route::get('/courseByClass/{id}', 'api\UserController@courseByClass');
    Route::get('/lesson/{id}', 'api\UserController@lesson');
    Route::get('/lessonByCourse/{id}', 'api\UserController@lessonByCourse');
    Route::get('/quiz/{id}', 'api\UserController@quiz');
    Route::get('/quizByCourse/{id}', 'api\UserController@quizByCourse');
    Route::get('/completeLesson/{id}', 'api\UserController@completeLesson');
    Route::get('/completeQuiz/{id}', 'api\UserController@completeQuiz');
    Route::get('/lessonProgress/{id}', 'api\UserController@getLessonProgress');
    Route::get('/quizProgress/{id}', 'api\UserController@getQuizProgress');
    Route::get('/lessonProgress', 'api\UserController@getLessonProgressByUser');
    Route::get('/quizProgress', 'api\UserController@getQuizProgressByUser');
    Route::get('/courseProgress/{id}', 'api\UserController@getCurrentProgress');
    Route::get('/checkQuizDone/{id}', 'api\UserController@checkQuizDone');
});