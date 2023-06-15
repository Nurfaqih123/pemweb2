<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/form', function () {
    return view('form');
});

Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

Route::prefix('toko')->group(function () {
    Route::get('/', [TokoController::class, 'index']);
    Route::get('/detail', [TokoController::class, 'detail']);
    Route::get('/about', [TokoController::class, 'about']);
});

use App\Http\Controllers\tokocontroller;



route::prefix('toko')->group(function(){


    route::get('/',
        [tokocontroller::class, 'index']);

    route::get('/detail',
        [tokocontroller::class, 'detail']);

    route::get('/about',
        [tokocontroller::class, 'about']);


    route::get('/admin',
        [tokocontroller::class, 'admin'])->name('produk.admin');

    route::get('/create',
        [tokocontroller::class, 'create'])->name('product.create');

    route::post('/',
        [tokocontroller::class, 'store'])->name('product.store');
    
});


