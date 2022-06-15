<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::post('/', [PageController::class, 'index']);
Route::get('/', [PageController::class, 'index'])->name('index');
//Route::get('/test', [PageController::class, 'test']);
Route::post('/test', [PageController::class, 'test']);
