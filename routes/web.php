<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/villager-list/{year}', [\App\Http\Controllers\Manager\VillagerListController::class, 'show'])->name('villager.list');
Route::post('/villager-register-form', [\App\Http\Controllers\Villager\VillagerRegisterController::class, 'create'])->name('villager.create');
Route::get('/villager-register', [\App\Http\Controllers\Villager\VillagerRegisterController::class, 'show'])->name('villager.show');
Route::get('/live-event-list', [\App\Http\Controllers\Manager\LiveEventListController::class, 'show'])->name('manager.live-event.list');
Route::post('/live-event-register-form', [\App\Http\Controllers\Manager\LiveEventRegisterController::class, 'create'])->name('manager.live-event.create');
Route::get('/live-event-register', [\App\Http\Controllers\Manager\LiveEventRegisterController::class, 'show'])->name('manager.live-event.show');

Route::get('/villager/top', [\App\Http\Controllers\Villager\VillagerTopController::class, 'show'])->name('villager.top');

require __DIR__.'/auth.php';
