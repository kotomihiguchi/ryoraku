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

// Route::get('/', function () {
//     return view('top');
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@top')->name('top');
Route::get('user/inquiry/create', 'User\InquiryController@add');
Route::post('user/inquiry/create', 'User\InquiryController@create');
Route::get('user/inquiry/confirm', 'User\InquiryController@confirm');
Route::post('user/inquiry/confirm', 'User\InquiryController@confirm');
Route::get('user/inquiry/complete', 'User\InquiryController@complete');
Route::post('user/inquiry/complete', 'User\InquiryController@complete');



Route::get('admin/inquiry/index', 'Admin\InquiyController@index');
Route::get('admin/inquiry/show', 'Admin\InquiyController@show');
// Route::get('admin/inquiry/create', 'Admin\InquiryController@add');
// Route::post('admin/inquiry/create', 'Admin\InquiryController@create');
// Route::post('admin/inquiry/confirm', 'Admin\InquiryController@confirm');
// Route::get('admin/inquiry/complete', 'Admin\InquiryController@complete');