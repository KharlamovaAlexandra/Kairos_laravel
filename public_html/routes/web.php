<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/katalog', 'KatalogController@add_bas')->name('bas');
Route::get('/katalog', 'KatalogController@tep')->name('katalog');
Route::get('/maso', 'KatalogController@meet')->name('maso');
Route::get('/riba', 'KatalogController@fish')->name('riba');
Route::get('/sous', 'KatalogController@sous')->name('sous');
Route::get('/peas', 'KatalogController@peas')->name('peas');

Route::get('/about', 'AboutController@about')->name('about');



Route::get('/bascet', 'BascetController@index')->name('bascet');
Route::post('/basket', 'BascetController@upd')->name('update_bas');
Route::post('/del', 'BascetController@del')->name('del_bas');
Route::post('/zak', 'NewRequestController@index')->name('new_request');


Route::post('/info', 'AccountController@pas')->name('pas');
Route::post('/inf', 'AccountController@inf')->name('inf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/account', 'AccountController@account')->name('account');

Route::get('/users', function () {
    return App\User::all();
});
Route::post('/pos', 'KatalogController@search')->name('search');

