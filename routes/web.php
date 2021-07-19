<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
    return view('auth.login');
});

Route::view('/profile', 'profile');
Route::view('/document', 'document');

Auth::routes();
// students controller
Route::get('/students', [App\Http\Controllers\StudentController::class, 'index']);
Route::post('/students', [App\Http\Controllers\StudentController::class, 'store']);
Route::get('/students/create', [App\Http\Controllers\StudentController::class, 'create']);
// home controller
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
