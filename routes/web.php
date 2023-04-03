<?php

use App\Http\Livewire\LoginPage;
use App\Http\Livewire\OrdersTable;
use App\Http\Livewire\ProduitTable;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductTable;

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

Route::get('/orders', OrdersTable::class)->name('orders');
Route::get('/', LoginPage::class);
Route::get('/produit',ProduitTable::class)->name('liste-produit');
Route::get('/produit/{id}',ProduitTable::class)->name('produit');
Route::get('/template', function () {
    return view('template');
});

Route::get('/teste', function () {
    return view('test');
});

Route::get('/show', function () {
    return view('show');
});
