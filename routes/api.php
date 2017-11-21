<?php
<<<<<<< HEAD

use Illuminate\Http\Request;

=======
use Illuminate\Http\Request;
>>>>>>> 5037781d7605f7a814319b0c6cc05c4eb65eb32b
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
<<<<<<< HEAD

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
    //    Route::resource('task', 'TasksController');

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_api_routes
});
=======
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
    //    Route::resource('task', 'TasksController');
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_api_routes
});
>>>>>>> 5037781d7605f7a814319b0c6cc05c4eb65eb32b
