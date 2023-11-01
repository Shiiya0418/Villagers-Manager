<?php

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

Route::get('/villager_list', [\App\Http\Controllers\Manager\VillagerListController::class, 'show']);
Route::get('/villager_list/{year}', [\App\Http\Controllers\Manager\VillagerListController::class, 'showId']);