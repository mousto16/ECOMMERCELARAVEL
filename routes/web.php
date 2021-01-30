<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Models\Product;
// use Cart;
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

// Route::get('/', function () {
//     return view('welcome');
// });

/*la route des produits*/
Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/boutique/{slug}', [ProductController::class, 'show'])->name('products.show');

/*la route des carts*/
Route::get('/voirpanier', [CartController::class, 'index'])->name('cart.index');
Route::delete('/voirpanier/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/panier/ajouter', [CartController::class, 'store'])->name('cart.store');
Route::get('/videpanier', function(){
    Cart::clear();
});

/*chectout route*/
Route::get('/paiement', [CheckoutController::class, 'index'])->name('checkout.index');