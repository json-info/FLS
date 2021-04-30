<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VideoController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/log', function () {
    return view('auth.log');
});

// Route::get('/test', function() {
//     return view('Pages.Admin.Category.index');
// });

Route::resource('/category', CategoryController::class);

Route::resource('/watch', VideoController::class);

Route::get('/', function() {
    return view('/layouts.Client.Home.index');
});
// Route::get('test/{id}','VideoController@show');

// Route::get('/show', function() {
//     return view('/watch');
// });