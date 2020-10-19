<?php

use App\Mail\contact;
use Illuminate\Support\Facades\Mail;
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

Route::group(['prefix' => 'admin/'], function () {
    Route::resource('poll', 'AdminController');
    Route::get('view/{poll_id}/Result','AdminController@viewResult')->name('view.result');

    Route::get('/search','AdminController@pollSearch')->name('poll.search');
    Route::get('/submit/Search/','AdminController@submitSearch')->name('submit.search');
    Route::get('/submit/{poll_id}/result/','AdminController@submitResult')->name('submit.result');
    Route::get('change/password','AdminController@ChangePasswordForm')->name('change.password');
    Route::post('Password/change','AdminController@changePassword')->name('password.change');
});

Route::get('/about','GuestController@about')->name('about');
Route::get('/services','GuestController@services')->name('services');
Route::get('/home', 'GuestController@index')->name('home');
Route::get('/','GuestController@index')->name('home');
Route::get('/contact','ContactFormController@create')->name('contact');
Route::post('/contact','ContactFormController@store');
Auth::routes(['verify' => true]);
