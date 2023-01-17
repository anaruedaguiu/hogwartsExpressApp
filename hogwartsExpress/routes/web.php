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
Route::get('/home', [TrainRouteController::class, 'index']);

//D del CRUD
Route::delete('/delete/{id}', [TrainRouteController::class, 'destroy'])->name('deleteTrainRoute')->middleware('isadmin', 'auth');

//C del CRUD
Route::get('/create', [TrainRouteController::class, 'create'])->name('createTrainRoute')->middleware('isadmin', 'auth');
Route::post('/', [TrainRouteController::class, 'store'])->name('storeTrainRoute')->middleware('isadmin', 'auth');

//U del CRUD
Route::get('/edit/{id}', [TrainRouteController::class, 'edit'])->name('editTrainRoute')->middleware('isadmin', 'auth');
Route::patch('/trainRoute/{id}', [TrainRouteController::class, 'update'])->name('updateTrainRoute')->middleware('isadmin', 'auth');

//Show
Route::get('/show/{id}', [TrainRouteController::class, 'show'])->name('showTrainRoute');

//Inscribirse - desinscribirse
Route::get('/inscribe/{id}', [TrainRouteController::class, 'inscribe'])->name('inscribe')->middleware('auth');
Route::get('/unscribe/{id}', [TrainRouteController::class, 'unscribe'])->name('unscribe')->middleware('auth');


//Pagination
