<?php

use App\Http\Controllers\Pages\PostController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\PostDec;

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

Route::group(['namespace'=>'Pages'],function(){
    Route::match(['get','post'], '/', 'PostController@index')->name('welcome');
    Route::group(['middleware'=>'auth'],function(){
        // Route::get( '/mypost', 'PostController@userPost')->name('mypost');
        Route::get('/post-form/{slug?}', 'PostController@showPostForm')->name('create-post');
        Route::post('update-post/{slug?}', 'PostController@updatePost')->name('update-post');
        Route::get('delete-post/{slug}', 'PostController@deletePost')->name('delete-post');
    });


    Route::group(['prefix'=>'dashboard','middleware'=>['auth']],function(){
          Route::get('/', 'PageController@dashboard')->name('dashboard');
    });
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
