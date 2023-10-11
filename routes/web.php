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

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth');

Route::post('/', [ProductController::class, 'store'])->middleware('auth');

Route::get('/products/list', [ProductController::class, 'list'])->middleware('auth');

Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->middleware('auth');

Route::put('/products/update/{id}', [ProductController::class, 'update'])->middleware('auth');

Route::delete('/products/{id}', [ProductController::class, 'destroy'])->middleware('auth');

Route::get('/filtrar-por-tag', 'ProdutoController@filtrarPorTag')->name('produtos.filtrar_por_tag');

Route::get('/produtos/filtrar/{tag}', [ProductController::class, 'filtrarPorTag'])->name('produtos.filtrar');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
