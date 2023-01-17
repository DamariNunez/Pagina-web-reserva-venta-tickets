<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('search')->group(function () {
    Route::get('/index', 'App\Http\Controllers\SearchController@index')->name('search.index');
    Route::get('/filter', 'App\Http\Controllers\SearchController@filter')->name('search.filter');
    Route::get('/all', 'App\Http\Controllers\SearchController@all')->name('search.all');
    Route::get('/featured', 'App\Http\Controllers\SearchController@featured')->name('search.featured');
});
//Route::get('search')->name('search');
//Route::get('/search', ['uses' => 'SearchController@index'])->name('search.index');
//Route::get('/dashboard', ['middleware' => 'auth', 'uses' => 'DashboardController@index']);

require __DIR__.'/auth.php';
