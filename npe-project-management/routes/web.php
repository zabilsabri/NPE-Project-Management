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
    return view('Admin.home');
});

Route::get('/project', function () {
    return view('Admin.project');
});

Route::get('/project/new', function () {
    return view('Admin.new-project');
});

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Auth'], function () {

    Route::get('', 'LoginController@index')->name('login');
    Route::post('/loginProcess', 'LoginController@authenticate')->name('login.post');
    // Route::get('/logout', 'LoginController@logout')->name('logout');

});
