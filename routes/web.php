<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/bible-study-requests', 'BsController@bsrequest');
Route::get('/bible-study-requests-form','BsController@registrationform');
Route::post('/bible-study-create-form', 'BsController@createform');
Route::get('/thank-you','BsController@thankyou');

