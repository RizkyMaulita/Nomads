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
Route::get('/detail','DetailController@index')->name('detail');
Route::get('/checkout', 'CheckoutController@index')->name('checkout');
Route::get('/checkout/success', 'CheckoutController@success')->name('checkout-success');



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




