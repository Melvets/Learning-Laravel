<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DetailSewaController;
use App\Http\Controllers\MobilController;
use App\Models\Mobil;
use App\Models\Customer;
use App\Models\DetailSewa;
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
    return view('v_dashboard.index', [
        'title' => 'Home',
        'countMobil' => Mobil::all()->count(),
        'countCustomer' => Customer::all()->count(),
        'countDetailSewa' => DetailSewa::all()->count()
    ]);
});

Route::resource('/dashboard/mobil', MobilController::class);
Route::resource('/dashboard/customer', CustomerController::class);
Route::resource('/dashboard/detailsewa', DetailSewaController::class);

Route::get('/dashboard/detailsewa/tgl', [DetailSewaController::class, 'tanggal_ind']);
