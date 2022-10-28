<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
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
// Route::get('/home', function(){
//     return view('/pages/home');
// });
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/about', [aboutController::class, 'about'])->name('about');
Route::get('/store', [StoreController::class, 'store'])->name('store');