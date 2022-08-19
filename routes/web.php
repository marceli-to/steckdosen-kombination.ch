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
Route::get('/', [PageController::class, 'app'])->name('page.app');
Route::get('/landing', [PageController::class, 'index'])->name('page.landing');

// Route::get('/update-product-form-data', [PageController::class, 'updateFormData']);
