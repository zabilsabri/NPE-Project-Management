<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('Admin.home.home');
})->middleware('auth');

Route::get('/detail', function () {
    return view('Admin.project.detail-project');
});

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Auth'], function () {

    Route::get('', 'LoginController@index')->name('login');
    Route::post('/loginProcess', 'LoginController@authenticate')->name('login.post');
    Route::get('/logout', 'LoginController@logout')->name('logout');
});

// Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'Admin']], function () {

//     Route::group(['prefix' => 'admin'], function(){
//         Route::get('/', 'HomeController@index')->name('home.admin');

//         Route::group(['prefix' => 'project'], function(){
//             Route::get('/', 'ProjectController@index')->name('project.admin');
//             Route::get('/create', 'ProjectController@create')->name('project-create.admin');
//         });

//     });

// });

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Admin'], function () {

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'HomeController@index')->name('home.admin');

        Route::group(['prefix' => 'project'], function () {
            Route::get('/', 'ProjectController@index')->name('project.admin');
            Route::get('/create', 'ProjectController@create')->name('project-create.admin');
        });
    });
});
