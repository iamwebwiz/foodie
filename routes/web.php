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




/*
 *  FRONTEND ROUTES
 */

Route::group(['prefix' => '/'], function (){

    Route::get('/', function () {
        return view('frontend.index');
    })->name('frontend.index');

    Route::get('menu', function () {
        return view('frontend.menu');
    })->name('frontend.menu');

    Route::get('about', function () {
        return view('frontend.about');
    })->name('frontend.about');

    Route::get('blog', function () {
        return view('frontend.blog');
    })->name('frontend.blog');

    Route::get('blog-single', function () {
        return view('frontend.blog-single');
    })->name('frontend.blog-single');

     Route::get('shop', function () {
            return view('frontend.shop');
        })->name('frontend.shop');

     Route::get('shop-single', function () {
                return view('frontend.shop-single');
        })->name('frontend.shop-single');

     Route::get('cart', function () {
                return view('frontend.cart');
        })->name('frontend.cart');

     Route::get('checkout', function () {
                return view('frontend.checkout');
        })->name('frontend.checkout');

     Route::get('account', function () {
                return view('frontend.account');
        })->name('frontend.account');

     Route::get('account-detail', function () {
                return view('frontend.account-detail');
        })->name('frontend.account-detail');

     Route::get('contact', function () {
                return view('frontend.contact');
        })->name('frontend.contact');

});


/*
 *
 *  ADMIN PANEL ROUTES
 *
 */

Route::group(['prefix' => 'admin'], function (){

    Route::get('/', function (){
        return view('admin.index');
    })->name('admin.index');

    // Get Create Product
    Route::get('new-product',[
        'uses' =>'ProductsController@getProductCreate',
        'as' => 'admin.new-product'
    ]);

    // Post Blog
    Route::post('new-product',[
        'uses' =>'ProductsController@postProductCreate',
        'as' => 'admin.new-product'
    ]);

    // Category Create
    Route::get('category',[
        'uses' => 'CategoriesController@create',
        'as' => 'admin.category'
    ]);

    // Post Category
    Route::post('category',[
        'uses' => 'CategoriesController@store',
        'as' => 'admin.category'
    ]);

    Route::get('new-product', function (){
        return view('admin.new-product');
    })->name('admin.new-product');

    Route::get('product', function (){
        return view('admin.product');
    })->name('admin.product');

    Route::get('product-orders', function (){
        return view('admin.product-orders');
    })->name('admin.product-orders');

    Route::get('category', function (){
        return view('admin.category');
    })->name('admin.category');

});