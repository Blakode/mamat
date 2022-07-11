<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ProductController::class, 'index' ]);

Route::resource('/products',ProductController::class,
    [
     'as' => 'prefix', 
        'names' => [
            'index' => '/',
            'create' => 'product.create', 
            'show' => 'product.show', 
            'edit' => 'product.edit',
            'store' => 'product.store',
            'destroy' => 'product.destroy'
        ]
    ]);


Route::get('/user',[ UserController::class, 'show']);

    Route::resource('/users',UserController::class,
[
    'as' => 'prefix',
        'names' => [
            'index' => '/user',
            'create' => 'user.create', 
            'show' => 'user.show',
            'edit' => 'user.edit',
            'store' => 'user.store',
            'destroy' => 'user.destroy'
        ]
]);

Route::resource('/orders',OrderController::class,
[
    'as' => 'prefix',
        'names' => [
            'index' => '/order',
            'create' => 'order.create', 
            'show' => 'order.show',
            'edit' => 'order.edit',
            'store' => 'order.store',
            'destroy' => 'order.destroy'
        ]
]);

Route::resource('/transactions',TransactionController::class,
[
    'as' => 'prefix',
        'names' => [
            'index' => '/transaction',
            'create' => 'transaction.create', 
            'show' => 'transaction.show',
            'edit' => 'transaction.edit',
            'store' => 'transaction.store',
            'destroy' => 'transaction.destroy'
        ]
]);

// product controller 
// Route::get('kitchen/{slug}', [KitchenController::class, 'index']); 
Route::get('menu/{slug}', [MenuController::class, 'index']); 
Route::get('about/{slug}', [AboutController::class, 'index']);
Route::get('contact/{slug}', [ContactController::class, 'index']);


// Route::get('/profile', [ProfileController::class, 'index'])->name('profile'); 
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
