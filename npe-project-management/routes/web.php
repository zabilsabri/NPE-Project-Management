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

Route::get('/report', function () {
    return view('Admin.report.report');
});

Route::group(['prefix' => '/admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home.admin');

    Route::group(['prefix' => 'project'], function () {
        Route::get('/', 'ProjectController@index')->name('project.admin');

        Route::get('/create', 'ProjectController@create')->name('project-create.admin');
        Route::post('/create', 'ProjectController@store')->name('project-store.admin');

        Route::get('/edit/{id}', 'ProjectController@edit')->name('project-edit.admin');
        Route::post('/edit', 'ProjectController@update')->name('project-update.admin');

        Route::get('/detail/{id}', 'ProjectController@show')->name('project.detail');

        Route::delete('/delete/{id}', 'ProjectController@destroy')->name('project.delete');
    });

    Route::group(['prefix' => 'employee'], function () {
        Route::get('/', 'EmployeeController@index')->name('employee.admin');

        Route::get('/create', 'EmployeeController@create')->name('employee-create.admin');
        Route::post('/create', 'EmployeeController@store')->name('employee-store.admin');

        Route::get('/edit/{id}', 'EmployeeController@edit')->name('employee-edit.admin');
        Route::post('/edit', 'EmployeeController@update')->name('employee-update.admin');

        Route::delete('/delete/{id}', 'EmployeeController@destroy')->name('employee-destroy.admin');
    });
});

Route::group(['prefix' => '/user', 'namespace' => 'App\Http\Controllers\User'], function () {
    Route::get('/', 'HomeController@index')->name('home.user');

    Route::group(['prefix' => 'project'], function () {
        Route::get('/', 'ProjectController@index')->name('user.projects');
        Route::get('/detail/id', 'ProjectController@detail')->name('user.projects.detail');
        Route::get('/finished', 'ProjectController@finished')->name('user.projects.finished');

    });
});
