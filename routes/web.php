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

// Route::get('/', function () {
//     return view('home');
// });



Auth::routes();


Route::get('/dashboard/home', 'HomeController@index')->name('dashboard.home')->middleware('auth','Admin');
// Route::get("/home",function(){
//     return view("home");
// })->middleware('auth');
//dashboard
Route::get('/dashboard/packages/create','PackageController@create')->name('package.create')->middleware('auth','Admin');
Route::post('/dashboard/packages/create','PackageController@store')->name('package.store');
Route::get('/dashboard/packages/index','PackageController@index')->name('package.index')->middleware('auth');
Route::get('/dashboard/packages/{id}/edit','PackageController@edit')->name('package.edit')->middleware('auth','Admin');
Route::post('dashboard//packages/update/{id}','PackageController@update')->name('package.update');
Route::get('/dashboard/packages/{id}/delete','PackageController@destroy')->name('package.delete');
Route::get('/dashboard/booking/bookingslist','BookingController@bookings_list')->name('booking.list')->middleware('auth','Admin');

//Home
Route::get('/home','HomeApp\HomeController@index')->name('home');
Route::get('/','HomeApp\HomeController@index')->name('home');
Route::get('/packages/showDetails/{id}','HomeApp\HomeController@showDetails')->name('packages.details')->middleware('auth');

Route::get('/booking/{id}','BookingController@Bookingview')->name('booking.form');
Route::post('/booking/book/{id}','BookingController@book')->name('booking.book');
