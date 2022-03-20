<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\registController;
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

// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// });

// Route::get('/input-dashboard', function () {
//     return view('pages.input-dashboard');
// });

// Route::get('/input-data', function () {
//     return view('pages.input-data');
// });
Route::get('/dashboard', [travelController::class, 'index']);
Route::get('/input-dashboard', [travelController::class, 'inputDataTravel']);
Route::post('/simpanTravel', [travelController::class, 'simpanTravel']);

Route::get('/table-user', [loginController::class, 'user']);

Route::get('/', [loginController::class, 'index']);
Route::any('/loginUser', [loginController::class, 'authenticate']);

Route::get('/logout', [loginController::class, 'logout']);

Route::get('/register', [registController::class, 'regist']);
Route::post('registUser', [registController::class, 'registUser']);