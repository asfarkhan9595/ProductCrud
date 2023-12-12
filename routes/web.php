<?php

use App\Http\Controllers\ProductController;
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



// Route to display the product list
Route::get('/', [ProductController::class, 'index'])->name('products.index');

// Route to display the create product form
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Route to handle the submission of the create product form
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Route to display the edit product form
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Route to handle the submission of the edit product form
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Route to delete a product
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
