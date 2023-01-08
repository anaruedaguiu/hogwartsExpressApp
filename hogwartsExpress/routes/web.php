<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainRouteController;

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

Auth::routes();

// R del CRUD
Route::get('/', [TrainRouteController::class, 'index'])->name('home');
Route::get('/home', [TrainRouteControllerr::class, 'index']);

//D del CRUD
Route::delete('/delete/{id}', [TrainRouteController::class, 'destroy'])->name('deleteTrainRoute');

//C del CRUD
Route::get('/create', [TrainRouteController::class, 'create'])->name('createTrainRoute');
Route::post('/', [TrainRouteController::class, 'store'])->name('storeTrainRoute');

//U del CRUD
Route::get('/edit/{id}', [TrainRouteController::class, 'edit'])->name('editTrainRoute');
Route::patch('/trainRoute/{id}', [TrainRouteController::class, 'update'])->name('updateTrainRoute');

//Show
Route::get('/show/{id}', [TrainRouteController::class, 'show'])->name('showTrainRoute');

