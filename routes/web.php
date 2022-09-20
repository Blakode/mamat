<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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

/*
-----------------------------------------------------------------
| group route by as roles & endpoint prefixs 
-----------------------------------------------------------------
*/
Route::get('/', [ProductController::class, 'index' ]);

/*
-----------------------------------------------------------------
| Guest Users
-----------------------------------------------------------------
*/
Route::resource('/products', ProductController::class, [
    'as' => 'products.',
    'prefix' => 'products', 
    'names' => [
            'show' => 'product.show', 
            'index' => '/',
        ]
     ])->only('index','show');

/*
-----------------------------------------------------------------
| Authenticated Users
-----------------------------------------------------------------
*/
    Route::group(['middleware' => 'auth'], function()
    {

/*
-----------------------------------------------------------------
| Authenticated && Verfied Users
-----------------------------------------------------------------
*/
        Route::group([
            // 'middleware' => ['verified', ],
        ], function() {

             /*
            -----------------------------------------------------------------
            | Authenticated && Verfied super Admin [sadmin]
            -----------------------------------------------------------------
            */
            Route::group([
                'middleware' => ['is_sadmin', ], 
                'prefix' => 'sadmin',
                'as' => 'sadmin.'
                ], function() {   
                    Route::get('/dashboard', [App\Http\Controllers\sadmin\DashboardController::class, 'index']);
                            });

            /*
            -----------------------------------------------------------------
            | Authenticated && Verfied Admin
            -----------------------------------------------------------------
            */
            Route::group([
                'middleware' => ['is_admin', ], 
                'prefix' => 'admin',
                'as' => 'admin.'
                ], function() {
                    Route::get('/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index']);
                                });

            /*
            -----------------------------------------------------------------
            | Authenticated && Verfied User
            -----------------------------------------------------------------
            */
            Route::group([
                'middleware' => ['is_user', ], 
                'prefix' => 'user',
                'as' => 'user.'
                ], function() {
                    Route::get('/dashboard', [App\Http\Controllers\user\DashboardController::class, 'index']);
            });

        }); 

        // Route::get('/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index']);
        // Route::get('/dashboard', [App\Http\Controllers\sadmin\DashboardController::class, 'index']);
    }); 

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

Route::resource('/orders', App\Http\Controllers\user\OrderController::class,
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

/*
-----------------------------------------------------------------
| Auth Dashboard Routes
-----------------------------------------------------------------
*/

Route::get('menu/{slug}', [MenuController::class, 'index']); 
Route::get('about/{slug}', [AboutController::class, 'index']);
Route::get('contact/{slug}', [ContactController::class, 'index']);


// Route::get('/profile', [ProfileController::class, 'index'])->name('profile'); 
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
