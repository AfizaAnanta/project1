<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContenController;
use App\Http\Controllers\BiodataController;

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
Route::get('biodata',[ContenController::class,'index']);
Route::resource('biodata',BiodataController::class,);
Route::get('/home', [ContenController::class, 'index']);
Route::get('/contak', [ContenController::class, 'contak']);