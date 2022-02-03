<?php

use App\Http\Controllers\travelController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// });

// Route::get('/input-dashboard', function () {
//     return view('pages.input-dashboard');
// });

// Route::get('/input-data', function () {
//     return view('pages.input-data');
// });
Route::get('/', [travelController::class, 'index']);
Route::get('/input-data', [travelController::class, 'inputDataTravel']);
Route::post('/simpanTravel', [travelController::class, 'simpanTravel']);