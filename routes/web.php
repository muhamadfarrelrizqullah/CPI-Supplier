<?php

use App\Http\Controllers\alternatifController;
use App\Http\Controllers\AValueController;
use App\Http\Controllers\CpiController;
use App\Http\Controllers\criteriaController;
use App\Models\Alternatif;
use App\Models\Criteria;
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
    $alternatif = Alternatif::all()->count();
    $criteria = Criteria::all()->count();
    return view('dashboard', compact('alternatif', 'criteria'));
});

//alternatif
Route::get('/alternatifs', [alternatifController::class, 'index']);

//aboutme
Route::get('/about', function () {
    return view('aboutme');
});

//criteria
Route::get('/criterias', [criteriaController::class, 'index']);

//nilai
Route::get('/altvalue', [AValueController::class, 'index']);
Route::get('/value/{id}', [AValueController::class, 'showValue']);
Route::put('/edit_value/{id}', [AValueController::class, 'edit']);

//perhitungan
Route::get('/calculate', [CpiController::class, 'index']);
