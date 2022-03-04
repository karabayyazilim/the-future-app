<?php

use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DegreeController;
use App\Http\Controllers\Admin\MovieController;
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

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::resources([
        'category' => CategoryController::class,
        'artist' => ArtistController::class,
        'movie' => MovieController::class,
        'degree' => DegreeController::class,
    ]);
});

require __DIR__.'/auth.php';
