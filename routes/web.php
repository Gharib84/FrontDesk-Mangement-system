<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; 
use App\Http\Controllers\roomscontroller;
use App\Http\Controllers\CheckController;

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
    return redirect('login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::resource('books', BookController::class)->middleware(['auth', 'verified']);
Route::resource('rooms', roomscontroller::class)->only([
    'index', 'create', 'store', 'show', 'destroy'
])->middleware(['auth', 'verified']);

Route::put('rooms/{checkIn}', [roomscontroller::class, 'store_invoice'])->name('rooms.store_invoice')->middleware(['auth', 'verified']);
Route::get('invoices',[roomscontroller::class, 'invoices_index'])->name('invoices.table')->middleware(['auth', 'verified']);
Route::get('invoices/{invoice}', [roomscontroller::class, 'show_invoice'])->name('invoices.show')->middleware(['auth', 'verified']);
Route::delete('invoices/{invoice}',[roomscontroller::class, 'PayNow'])->name('invoices.PayNow')->middleware(['auth', 'verified']);

#arrivals Router
Route::get('arrivals/form',[CheckController::class, 'Create'])->name('arrivals.create')->middleware(['auth', 'verified']);
Route::post('arrivals/form', [CheckController::class, 'ArrivalsPost'])->name('arrivals.post')->middleware(['auth', 'verified']);
Route::delete('arrivals/form/{arr}', [CheckController::class, 'ArrivalDeleteRoom'])->name('arrival.delete')->middleware(['auth', 'verified']);
Route::get('arrivals', [CheckController::class, 'ArrivalsIndex'])->name('arrivals.index')->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';
