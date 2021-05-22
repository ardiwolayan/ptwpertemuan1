<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PraktikumController;
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

Route::get('', [PraktikumController::class, 'index']);
Route::get('0098/0098index', [PraktikumController::class, 'index']);
Route::get('0098/0098artikel', [PraktikumController::class, 'artikel']);
Route::get('0098/0098contactus', [PraktikumController::class, 'contactus']);
Route::get('0098/0098laravel', [PraktikumController::class, 'laravel']);
Route::get('0098/0098codeigniter', [PraktikumController::class, 'codeigniter']);
