<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
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

//raggruppo le mie rotte di amministrazione
Route::middleware('auth', 'verified')
    //aggiungo un nome a tutte le rotte del gruppo
    //prefisso che si aggiunge al nome della rotta
    ->name('admin.')
    //modifica url della rotta di questo gruppo /admin/...
    ->prefix('admin')
    ->group(function () {
        //modifica controller per rotta, rimuovo il middleware singolo perchè ora è un gruppo
        // tolgo dashboard da / perchè ora le mie rotte hanno /admin
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
