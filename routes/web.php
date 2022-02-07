<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\LoginregisterController;

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

//Route::get('/', function () {
//    return view('login');
//});


//registration, authentication, login
Route::get('/', [LoginregisterController::class, 'index'])->name('index');
Route::post('/' , [LoginregisterController::class, 'store'])->name('store');
Route::get('register', [LoginregisterController::class, 'register'])->name('register');
Route::post('register', [LoginregisterController::class, 'create'])->name('create');

// Home
Route::get('home', [HomeController::class, 'index'])->name('HomeIndex');

// administrator
Route::get('admin', [AdminController::class, 'index'])->name('AdminIndex');
//Route::post('admin', [AdminController::class, 'store'])->name('AdminStore');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function()
{

Route::get('CreateStock', ['as' => 'CreateStock', 'uses' => 'App\Http\Controllers\AdminController@create']);
Route::get('ReadStock',   ['as' => 'ReadStock',   'uses' => 'App\Http\Controllers\AdminController@show']);
    Route::get('EditStock', ['as' => 'EditStock', 'uses' => 'App\Http\Controllers\AdminController@edit']);
Route::get('UpdateStock', ['as' => 'UpdateStock', 'uses' => 'App\Http\Controllers\AdminController@update']);
Route::get('DeleteStock', ['as' => 'DeleteStock', 'uses' => 'App\Http\Controllers\AdminController@destroy']);

});
