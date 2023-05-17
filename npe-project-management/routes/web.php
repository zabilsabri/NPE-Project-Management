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

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::get('/', 'LoginController@index')->name('login');
    Route::post('/login', 'LoginController@authenticate')->name('login.post');
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

Route::group(['prefix' => '/admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'project'], function () {
        Route::get('/', 'ProjectController@index')->name('project.admin');
        Route::get('/create', 'ProjectController@create')->name('project-create.admin');
        Route::get('/detail/{id}', 'ProjectController@show')->name('project.detail');
    });
});

Route::group(['prefix' => '/user', 'namespace' => 'App\Http\Controllers\User', 'middleware' => ['auth']], function () {
    /* Route::get('/', 'HomeController@index')->name('home'); */
    /*  */
    /* Route::group(['prefix' => 'project'], function () { */
    /*     Route::get('/', 'ProjectController@index')->name('project.admin'); */
    /*     Route::get('/create', 'ProjectController@create')->name('project-create.admin'); */
    /*     Route::get('/detail/{id}', 'ProjectController@show')->name('project.detail'); */
    /* }); */
});
