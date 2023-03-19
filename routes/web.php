<?php

use App\Http\Livewire\OrdersTable;
use App\Http\Livewire\ProduitTable;
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

Route::get('/detail/{id}', ProduitTable::class)->name('detail');

// Route::get('/produit/{id}', [OrdersTable::class,'selectOrders'])->name('produit');
// Route::get('produit/{id}', [OrderController::class,'index'])->name('orders');
// Route::post('barcode?[id={id}]', [OrderController::class,'postBarcode'])->name('barcode');
