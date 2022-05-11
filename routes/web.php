<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;

use App\Http\Controllers\PersonController;
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
    return redirect('/login');
});

Route::get('/home', function () {
    return redirect('/people');
});
Route::get('/cities',[CityController::class,'all']);
Route::get('/search',[CityController::class,'search']);
Route::get('/city/{id}',[CityController::class,'edit']);
Route::get('/people',[PersonController::class,'all']);
Route::post('/people',[PersonController::class,'create']);
Route::post('/people/{id}/delete',[PersonController::class,'delete']);

Route::post('/city/{id}',[CityController::class,'update']);
Route::post('/city/{id}/delete',[CityController::class,'delete']);
Auth::routes();
