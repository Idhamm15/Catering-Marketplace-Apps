<?php

use App\Http\Controllers\Admin\DaftarMerchant;
use App\Http\Controllers\Admin\Index;
use App\Http\Controllers\Admin\IndexAdmin;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Merchant\DaftarOrder;
use App\Http\Controllers\Merchant\IndexMerchant;
use App\Http\Controllers\Merchant\KelolaMenuMakanan;
use App\Http\Controllers\PaymentController;
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



// Landing Pages
// Route::get('/', [LandingPageController::class, 'index']);
Route::get('/menu', [LandingPageController::class, 'menu']);
Route::get('/order', [LandingPageController::class, 'order']);
Route::get('/payment', [PaymentController::class, 'index']);
Route::get('/loading-payment', [PaymentController::class, 'loading_payment']);
Route::get('/success-payment', [PaymentController::class, 'success_payment']);
Route::get('/invoicing', [LandingPageController::class, 'invoicing']);


Auth::routes();
// Admin
Route::get('/admin', [IndexAdmin::class, 'index']);


Route::middleware(['auth','user-role:ADMIN|MERCHANT',])->group(function()
{
    // Daftar Merchant
    Route::get('/admin/merchant/kelola-merchant', [DaftarMerchant::class, 'index']);
    Route::post('/admin/merchant/store', [DaftarMerchant::class, 'store']) -> name('merchant.store');
    Route::put('/admin/merchant/{id}', [DaftarMerchant::class, 'update'])->name('merchant.update');
    Route::delete('admin/merchant/{id}', [DaftarMerchant::class, 'delete'])->name('merchant.delete');

    // Daftar Customer
    Route::get('/admin/customer/kelola-customer', [DaftarMerchant::class, 'index']);
    Route::post('/admin/customer/store', [DaftarMerchant::class, 'store']) -> name('customer.store');
    Route::put('/admin/customer/{id}', [DaftarMerchant::class, 'update'])->name('customer.update');
    Route::delete('admin/customer/{id}', [DaftarMerchant::class, 'delete'])->name('customer.delete');


    // Merchant
    Route::get('/merchant', [IndexMerchant::class, 'index']);

    // Daftar Order
    Route::get('/merchant/order/kelola-order', [DaftarOrder::class, 'index']);
    Route::post('/merchant/order/store', [DaftarOrder::class, 'store']) -> name('orderMerchant.store');
    Route::put('/merchant/order/{id}', [DaftarOrder::class, 'update'])->name('orderMerchant.update');
    Route::delete('/merchant/order/{id}', [DaftarOrder::class, 'delete'])->name('orderMerchant.delete');

    // Daftar Menu Makanan
    Route::get('/merchant/menu-makanan/kelola-menu-makanan', [KelolaMenuMakanan::class, 'index']);
    Route::post('/merchant/menu-makanan/store', [KelolaMenuMakanan::class, 'store']) -> name('menuMakanan.store');
    Route::put('/merchant/menu-makanan/{id}', [KelolaMenuMakanan::class, 'update'])->name('menuMakanan.update');
    Route::delete('/merchant/menu-makanan/{id}', [KelolaMenuMakanan::class, 'delete'])->name('menuMakanan.delete');

});
