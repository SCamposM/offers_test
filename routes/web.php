<<<<<<< HEAD
<?php

=======

<?php
>>>>>>> 5037781d7605f7a814319b0c6cc05c4eb65eb32b
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
<<<<<<< HEAD

Route::get('/', function () {
    return view('welcome');
});

=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 5037781d7605f7a814319b0c6cc05c4eb65eb32b
Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });
<<<<<<< HEAD

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
=======
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
>>>>>>> 5037781d7605f7a814319b0c6cc05c4eb65eb32b
