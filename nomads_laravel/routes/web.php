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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/daftar', 'HomeController@daftar');

Auth::routes(['verify' => true]);

Route::get('/','HomeController@index')->name('home');
Route::get('/detail/{slug}','DetailController@index')->name('detail');
// Route::get('/checkout', 'CheckoutController@index')->name('checkout');
// Route::get('/checkout/success', 'CheckoutController@success')->name('checkout-success');

Route::post('/checkout/{id}', 'CheckoutController@process')
    ->name('checkout_process')
    ->middleware(['auth','verified']);

Route::get('/checkout/{id}', 'CheckoutController@index')
    ->name('checkout')
    ->middleware(['auth','verified']);

Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')        // untuk menambah member baru yang mau join trip
    ->name('checkout-create')
    ->middleware(['auth','verified']);

Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')         //  untuk menghapus member yang tidak jadi ikut trip
    ->name('checkout-remove')
    ->middleware(['auth','verified']);

Route::get('/checkout/confirm/{id}', 'CheckoutController@success')
    ->name('checkout-success')
    ->middleware(['auth','verified']);

// Jadi, Route::prefix('admin') ini untuk menamakan route di urlnya. jika dinamakan ('coba'), maka di url localhost:8000/coba
// Sedangkan namespace itu nama folder yang berada di App\Http\Controller. kalau ga pakai folder, maka tidak perlu namespace

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('travel-package','TravelPackageController');
        Route::resource('gallery','GalleryController');
        Route::resource('transaction','TransactionController');

    });




