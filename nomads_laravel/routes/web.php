<?php

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

// use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Jadi, Route::prefix('admin') ini untuk menamakan route di urlnya. jika dinamakan ('coba'), maka di url localhost:8000/coba
// Sedangkan namespace itu nama folder yang berada di App\Http\Controller. kalau ga pakai folder, maka tidak perlu namespace

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');
    });
