<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;

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

Route::resource('posts', 'PostController');

/*Route::get('/posts/create', 'PostController@create');
Route::post('/posts/index', 'PostController@index');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update'); */

//Route::post('/posts/create', 'PostController@create');

Route::get('/users', 'UserController@show');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customer', 'TestController@add_customer_form')->name('customer.add');
Route::post('/customer', 'TestController@submit_customer_data')->name('customer.save');
Route::get('/customer/list', 'TestController@fetch_all_customer')->name('customer.list');
Route::get('/customer/edit/{customer}', 'TestController@edit_customer_form')->name('customer.edit');
Route::patch('/customer/edit/{customer}', 'TestController@edit_customer_form_submit')->name('customer.update');
Route::get('/customer/{customer}', 'TestController@view_single_customer')->name('customer.view');
Route::delete('/customer/{customer}', 'TestController@delete_customer')->name('customer.delete');


 