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
Route::prefix('authors')->group(function () {

    // mes sukursime grupe keliu, kurie susije su autoriais

    //Jeigu raso, kad controller nerastas

    Route::get('','App\Http\Controllers\AuthorController@index')->name('author.index');
    Route::get('create', 'App\Http\Controllers\AuthorController@create')->name('author.create');
    Route::post('store', 'App\Http\Controllers\AuthorController@store')->name('author.store');

    Route::get('edit/{author}', 'App\Http\Controllers\AuthorController@edit')->name('author.edit');
    Route::get('update/{author}', 'App\Http\Controllers\AuthorController@update')->name('author.update');
    Route::post('delete/{author}', 'App\Http\Controllers\AuthorController@destroy')->name('author.destroy');
    Route::get('show/{author}', 'App\Http\Controllers\AuthorController@show')->name('author.show');
    // Route::get('','AuthorController@index')->name('author.index');
    // Route::get('create', 'AuthorController@create')->name('author.create');
    // Route::post('store', 'AuthorController@store')->name('author.store');

    // get/post

});
Route::get('/create', function () {
    return view('authors/create');
});
