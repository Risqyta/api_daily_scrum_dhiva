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
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('user', 'UserController@getAuthenticatedUser')->middleware('jwt.verify');

    Route::get('/daily_scrum', 'Daily_ScrumController@index');
    Route::get('/daily_scrum/{id}', 'Daily_ScrumController@show');
    Route::post('/daily_scrum', 'Daily_ScrumController@store');
    Route::put('/daily_scrum/{id}', 'Daily_ScrumControllerr@update');
    Route::delete('/daily_scrum/{id}', 'Daily_ScrumController@destroy');