<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PlayerController;

use Illuminate\Http\Request;

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




Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
    //        // Uses Auth Middleware
    //    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

/**
 * PYuhala: 
 * Updating routes with Laravel 8 syntax
 */
Route::get('/', [PlayerController::class, 'getIndex'])->name('index');
Route::post('/', [PlayerController::class, 'getIndex'])->name('index');
Route::get('/results', [PlayerController::class, 'getResults'])->name('results');
//Route::get('/validate-vote', [PlayerController::class, 'getResults'])->name('validate-vote-get');
Route::post('/validate-vote', [PlayerController::class, 'getVotes'])->name('validate-vote');



Route::get('/profile', [HomeController::class, 'getProfile'])->name('profile');
Route::get('/market', [ProductController::class, 'getMarket'])->name('shop.market');
Route::get('/order', [ProductController::class, 'getOrder'])->name('shop.order');
Route::get('add-to-cart/{id}', [ProductController::class, 'getAddToCart'])->name('product.addToCart');
Route::get('/shopping-cart', [ProductController::class, 'getCart'])->name('product.shoppingCart');
Route::get('/payment', [ProductController::class, 'getPayment'])->name('payment');
Route::get('/checkout', [ProductController::class, 'getCard'])->name('card');
Route::post('/checkout', [ProductController::class, 'postCheckout'])->name('checkout');
Route::get('/summary', [ProductController::class, 'getInvoice'])->name('invoice');
//Route::get('/payment/paypal', [PaymentController::class, 'getPaypal'])->name('payment.paypal');
Route::get('/about', [ProductController::class, 'getAbout'])->name('about');



// Outdated Laravel 5 syntax


// Route::get('/x', [
//     'uses' => 'ProductController@getIndex',
//     'as' => 'product.index'
// ]);
// Route::get('/profile', [
//     'uses' => 'HomeController@getProfile',
//     'as' => 'profile'
// ]);

// Route::get('/market', [
//     'uses' => 'ProductController@getMarket',
//     'as' => 'shop.market'
// ]);

// Route::get('/order', [
//     'uses' => 'ProductController@getOrder',
//     'as' => 'shop.order'
// ]);

// Route::get('/add-to-cart/{id}', [
//     'uses' => 'ProductController@getAddToCart',
//     'as' => 'product.addToCart'
// ]);

// Route::get('/shopping-cart', [
//     'uses' => 'ProductController@getCart',
//     'as' => 'product.shoppingCart'
// ]);
// Route::get('/payment', [
//     'uses' => 'PaymentController@getPayment',
//     'as' => 'payment'
// ]);
// Route::get('/checkout', [
//     'uses' => 'ProductController@getCard',
//     'as' => 'card'
// ]);
// Route::post('/checkout', [
//     'uses' => 'ProductController@postCheckout',
//     'as' => 'checkout'
// ]);
// Route::get('/summary', [
//     'uses' => 'ProductController@getInvoice',
//     'as' => 'invoice'
// ]);
// Route::get('/payment/paypal', [
//     'uses' => 'PaymentController@getPaypal',
//     'as' => 'payment.paypal'
// ]);
// Route::get('/about', [
//     'uses' => 'ProductController@getAbout',
//     'as' => 'about'
// ]);
