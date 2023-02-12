<?php

use Illuminate\Support\Facades\Route;
use App\Models\Videogame;

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

Route::resource('stockImage','StockImageController');
Route::resource('images','ImageController');
Route::resource('reviews','ReviewController');
Route::resource('videogames','VideogameController');
Route::resource('profile','ProfileController');
Route::resource('videogames.reviews','VideogameReviewController');
Route::resource('users.reviews','UserReviewController');

Route::get('users','UserController@index')->name('users.index');
Route::get('users/{user}','UserController@show')->name('users.show');
Route::post('users/changeAdmin/{user}','UserController@changeAdmin')->name('users.changeAdmin');

Route::get('/panel',function(){
    return view('panel.show');
})->name('panel')->middleware(['isAdmin']);

Route::get('/', function () {

    return view('welcome')->with(['videogames' => Videogame::all()]);
})->name('welcome');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
