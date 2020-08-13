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

    Route::get('/user', 'UserController@index')->name('user');
    Route::get('/user/{user:id}/check', 'UserController@check')->name('user.check');

    Route::get('/user/{user:id}/verify', 'UserController@verify')->name('user.verify');
});

Route::middleware('petani')->group(function () {
    // LAHAN
    Route::get('/lahan', 'FarmController@index')->name('farm');

    Route::get('/lahan/create', 'FarmController@create')->name('farm.create');
    Route::post('/lahan/store', 'FarmController@store')->name('farm.store');
});


Route::get('/verifikasi', 'FarmerController@kyc')->name('kyc');

Route::get('/verifikasi/info-pribadi', 'FarmerController@kycAbout')->name('kyc.about');
Route::post('/verifikasi/info-pribadi/store', 'FarmerController@kycAboutStore')->name('kyc.about.store');

Route::get('/verifikasi/info-bank', 'FarmerController@kycBank')->name('kyc.bank');
Route::post('/verifikasi/info-bank/store', 'FarmerController@kycBankStore')->name('kyc.bank.store');

Route::get('/verifikasi/info-identitas', 'FarmerController@kycIdentity')->name('kyc.identity');
Route::post('/verifikasi/info-identitas/store', 'FarmerController@kycIdentityStore')->name('kyc.identity.store');

// INVEST
// Route::get('/invest', 'InvestController@index')->name('invest');

// Route::get('/invest/project', 'InvestController@project')->name('invest.project');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->to('/');
})->name('logout');
