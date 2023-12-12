<?php

use App\Http\Controllers\DataController;
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

Route::get('/', [DataController::class, 'index']);

Route::get('/import', [DataController::class, 'import']);
Route::post('/import-data', [DataController::class, 'import_action']);

Route::get('cari', [DataController::class, 'cari']);


Route::get('/home', [DataController::class, 'home']);
