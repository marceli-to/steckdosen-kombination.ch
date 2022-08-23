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
Route::get('/', [PageController::class, 'index'])->name('page.landing');
Route::get('/app', [PageController::class, 'app'])->name('page.app');

// Route::get('/update-product-form-data', [PageController::class, 'updateFormData']);
