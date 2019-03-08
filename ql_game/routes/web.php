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


// Route Web
Route::get('/','Web\Home\indexController@index');
Route::get('About','Web\About\indexController@index');
Route::get('Games','Web\Games\indexController@index');
Route::get('Contact','Web\Contact\indexController@index');

// Route User
Route::get('Login','User\Login\indexController@index');
Route::post('login','User\Login\indexController@login');
Route::get('Logout','User\Login\indexController@logout');
Route::group(['prefix'=>'user'],function(){
	Route::get('system','User\System\indexController@index');
});

// Route Game
Route::get('games/{nameGame}','Games\VQMM\indexController@index');

// Route Package_purchase
Route::group(['prefix' => '/games-purchase'], function () {
    Route::get('/','Web\Package_purchase\indexController@index');
    Route::post('/','Web\Package_purchase\indexController@packagePurchase')->name('postPackagePurchase');
});
