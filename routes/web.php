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

Route::get('/', [PageController::class, 'index'])->name('page.landing');
Route::get('/de', [PageController::class, 'index'])->name('de.page.landing');
Route::get('/fr', [PageController::class, 'index'])->name('fr.page.landing');
Route::get('/it', [PageController::class, 'index'])->name('it.page.landing');
Route::get('/en', [PageController::class, 'index'])->name('en.page.landing');

Route::get('/app', [PageController::class, 'app'])->name('page.app');

// Route::get('/update-product-form-data', [PageController::class, 'updateFormData']);
