<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index', ]); 
Route::get('kitchen/{slug}', [KitchenController::class, 'index']); 
Route::get('menu/{slug}', [MenuController::class, 'index']); 
Route::get('about/{slug}', [AboutController::class, 'index']);
Route::get('contact/{slug}', [ContactController::class, 'index']);
Route::get('product/{slug}', [ProductController::class, 'index']); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
