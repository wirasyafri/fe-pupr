<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/forgot-password', [ForgotPasswordController::class, 'index']);

Route::get('/search', [SearchController::class, 'index']);
Route::get('/entry', [EntryController::class, 'index']);
Route::prefix('folder')->group(function () {
    Route::get('/dokumen', [FolderController::class, 'dokumen']);
    Route::get('/data-primer', [FolderController::class, 'dataPrimer']);
    Route::get('/data-sekunder', [FolderController::class, 'dataSekunder']);
});
Route::prefix('user')->group(function () {
    Route::get('/list', [UserController::class, 'index']);
    Route::get('/add', [UserController::class, 'add']);
});



