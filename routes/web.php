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

Route::get('/de/datenschutzerklaerung', [PageController::class, 'privacy'])->name('de.page.privacy');
Route::get('/fr/declaration-de-protection-des-donnees', [PageController::class, 'privacy'])->name('fr.page.privacy');
Route::get('/it/informativa-sulla-privacy', [PageController::class, 'privacy'])->name('it.page.privacy');
Route::get('/en/privacy-policy', [PageController::class, 'privacy'])->name('en.page.privacy');

Route::get('/de/cookies', [PageController::class, 'cookies'])->name('de.page.cookies');
Route::get('/fr/cookies', [PageController::class, 'cookies'])->name('fr.page.cookies');
Route::get('/it/cookies', [PageController::class, 'cookies'])->name('it.page.cookies');
Route::get('/en/cookies', [PageController::class, 'cookies'])->name('en.page.cookies');

Route::get('/app', [PageController::class, 'app'])->name('page.app');
Route::get('/de/app', [PageController::class, 'app'])->name('de.page.app');
Route::get('/fr/app', [PageController::class, 'app'])->name('fr.page.app');
Route::get('/it/app', [PageController::class, 'app'])->name('it.page.app');
Route::get('/en/app', [PageController::class, 'app'])->name('en.page.app');

// Route::get('/update-product-form-data', [PageController::class, 'updateFormData']);
