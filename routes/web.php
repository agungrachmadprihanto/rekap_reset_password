<?php

use App\Http\Controllers\DashboardCrontroller;
use App\Http\Controllers\DendaController;
use App\Http\Controllers\RekapController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [DashboardCrontroller::class,'index'])->name('home')->middleware('auth');
Route::get('/pending', [DashboardCrontroller::class,'pending'])->name('pending')->middleware('auth');
Route::get('/lunas', [DashboardCrontroller::class,'lunas'])->name('lunas')->middleware('auth');

Route::prefix('denda')
->middleware(['auth'])
->group(function ()
{
    Route::get('/',[DendaController::class, 'index'])->name('denda.index');
    Route::post('/add',[DendaController::class, 'add'])->name('denda.add');
    Route::get('/edit/{id}',[DendaController::class, 'edit'])->name('denda.edit');
    Route::put('/update/{id}', [DendaController::class, 'update'])->name('denda.update');
    Route::delete('/delete/{id}', [DendaController::class,'delete'])->name('denda.delete');
});

Route::prefix('rekap')
->middleware(['auth'])
->group(function ()
{
    Route::get('/', [RekapController::class,'index'])->name('rekap.index');
    Route::get('/search', [RekapController::class, 'cari'])->name('rekap.cari');
    Route::post('update/{id}', [RekapController::class,'update'])->name('rekap.update');
    Route::get('/export',[RekapController::class,'export'])->name('rekap.export');
});