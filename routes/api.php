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

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/test',function () {
        return "hello";
    });
    
    Route::middleware('user:api')->get('/user', function (Request $request) {
        return $request->user();
    });

    // Route::resource('/todo', 'TodoController');
    // Route::resource('/user', 'HomeController');

    //Route for User 
    Route::get('/userlist', 'UserController@index'); 
    Route::post('/userlist/new', 'UserController@create');
    Route::put('/userlist/update/{id}', 'UserController@update');
    Route::delete('/userlist/del/{id}', 'UserController@destroy');

    //Route for Todolist
    Route::get('/todo', 'TodoController@index'); 
    Route::post('/todo/new', 'TodoController@create');
    Route::put('/todo/update/{id}', 'TodoController@update');
    Route::delete('/todo/del/{id}', 'TodoController@destroy');   
    // Route::get('/todo',function () {
    //     return "HelloWord";
    // });
    
    // Route::post('/todo', function(Request $request){
    //     dd($request->all());
    //     $title = $request->title;
    //     $desc = $request->desc; 
    //     return $request->all();
    // });
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
