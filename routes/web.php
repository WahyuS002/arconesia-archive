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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
});

// POST
Route::middleware('admin')->group(function () {
    Route::get('/post', 'PostController@index')->name('post');

    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::post('/post/store', 'PostController@store')->name('post.store');

    Route::get('/post/{post:id}/edit', 'PostController@edit')->name('post.edit');
    Route::post('/post/{post:id}/update', 'PostController@update')->name('post.update');
    Route::delete('/post/{post:id}/delete', 'PostController@destroy')->name('post.delete');
});

Route::middleware('petani')->group(function () {
    // LAHAN
    Route::get('/lahan', 'FarmController@index')->name('farm');

    Route::get('/lahan/create', 'FarmController@create')->name('farm.create');
    Route::post('/lahan/store', 'FarmController@store')->name('farm.store');
});


Route::get('/verifikasi', 'FarmController@kyc')->name('kyc');

Route::get('/verifikasi/info-pribadi', 'FarmController@kycAbout')->name('kyc.about');
Route::get('/verifikasi/info-bank', 'FarmController@kycBank')->name('kyc.bank');
Route::get('/verifikasi/info-identitas', 'FarmController@kycIdentity')->name('kyc.identity');

// INVEST
// Route::get('/invest', 'InvestController@index')->name('invest');

// Route::get('/invest/project', 'InvestController@project')->name('invest.project');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->to('/');
})->name('logout');
