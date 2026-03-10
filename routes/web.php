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

// Product selection homepage
Route::get('/', [PageController::class, 'home'])->name('page.home');
Route::get('/de', [PageController::class, 'home'])->name('de.page.home');
Route::get('/fr', [PageController::class, 'home'])->name('fr.page.home');
Route::get('/it', [PageController::class, 'home'])->name('it.page.home');
Route::get('/en', [PageController::class, 'home'])->name('en.page.home');

// Steckdosen-Kombination (existing product)
Route::post('/steckdosen-kombination', [PageController::class, 'steckdosenKombinationLanding']);
Route::get('/steckdosen-kombination', [PageController::class, 'steckdosenKombinationLanding'])->name('page.steckdosen-kombination');
Route::get('/de/steckdosen-kombination', [PageController::class, 'steckdosenKombinationLanding'])->name('de.page.steckdosen-kombination');
Route::get('/fr/steckdosen-kombination', [PageController::class, 'steckdosenKombinationLanding'])->name('fr.page.steckdosen-kombination');
Route::get('/it/steckdosen-kombination', [PageController::class, 'steckdosenKombinationLanding'])->name('it.page.steckdosen-kombination');
Route::get('/en/steckdosen-kombination', [PageController::class, 'steckdosenKombinationLanding'])->name('en.page.steckdosen-kombination');
Route::post('/de/steckdosen-kombination', [PageController::class, 'steckdosenKombinationLanding']);
Route::post('/fr/steckdosen-kombination', [PageController::class, 'steckdosenKombinationLanding']);
Route::post('/it/steckdosen-kombination', [PageController::class, 'steckdosenKombinationLanding']);
Route::post('/en/steckdosen-kombination', [PageController::class, 'steckdosenKombinationLanding']);

Route::get('/steckdosen-kombination/app', [PageController::class, 'steckdosenKombinationApp'])->name('page.steckdosen-kombination.app');
Route::get('/de/steckdosen-kombination/app', [PageController::class, 'steckdosenKombinationApp'])->name('de.page.steckdosen-kombination.app');
Route::get('/fr/steckdosen-kombination/app', [PageController::class, 'steckdosenKombinationApp'])->name('fr.page.steckdosen-kombination.app');
Route::get('/it/steckdosen-kombination/app', [PageController::class, 'steckdosenKombinationApp'])->name('it.page.steckdosen-kombination.app');
Route::get('/en/steckdosen-kombination/app', [PageController::class, 'steckdosenKombinationApp'])->name('en.page.steckdosen-kombination.app');

// Wandsteckdose DUOi (new product)
Route::post('/wandsteckdose-duoi', [PageController::class, 'wandsteckdoseDuoiLanding']);
Route::get('/wandsteckdose-duoi', [PageController::class, 'wandsteckdoseDuoiLanding'])->name('page.wandsteckdose-duoi');
Route::get('/de/wandsteckdose-duoi', [PageController::class, 'wandsteckdoseDuoiLanding'])->name('de.page.wandsteckdose-duoi');
Route::get('/fr/wandsteckdose-duoi', [PageController::class, 'wandsteckdoseDuoiLanding'])->name('fr.page.wandsteckdose-duoi');
Route::get('/it/wandsteckdose-duoi', [PageController::class, 'wandsteckdoseDuoiLanding'])->name('it.page.wandsteckdose-duoi');
Route::get('/en/wandsteckdose-duoi', [PageController::class, 'wandsteckdoseDuoiLanding'])->name('en.page.wandsteckdose-duoi');
Route::post('/de/wandsteckdose-duoi', [PageController::class, 'wandsteckdoseDuoiLanding']);
Route::post('/fr/wandsteckdose-duoi', [PageController::class, 'wandsteckdoseDuoiLanding']);
Route::post('/it/wandsteckdose-duoi', [PageController::class, 'wandsteckdoseDuoiLanding']);
Route::post('/en/wandsteckdose-duoi', [PageController::class, 'wandsteckdoseDuoiLanding']);

Route::get('/wandsteckdose-duoi/app', [PageController::class, 'wandsteckdoseDuoiApp'])->name('page.wandsteckdose-duoi.app');
Route::get('/de/wandsteckdose-duoi/app', [PageController::class, 'wandsteckdoseDuoiApp'])->name('de.page.wandsteckdose-duoi.app');
Route::get('/fr/wandsteckdose-duoi/app', [PageController::class, 'wandsteckdoseDuoiApp'])->name('fr.page.wandsteckdose-duoi.app');
Route::get('/it/wandsteckdose-duoi/app', [PageController::class, 'wandsteckdoseDuoiApp'])->name('it.page.wandsteckdose-duoi.app');
Route::get('/en/wandsteckdose-duoi/app', [PageController::class, 'wandsteckdoseDuoiApp'])->name('en.page.wandsteckdose-duoi.app');

// Privacy & Cookies
Route::get('/de/datenschutzerklaerung', [PageController::class, 'privacy'])->name('de.page.privacy');
Route::get('/fr/declaration-de-protection-des-donnees', [PageController::class, 'privacy'])->name('fr.page.privacy');
Route::get('/it/informativa-sulla-privacy', [PageController::class, 'privacy'])->name('it.page.privacy');
Route::get('/en/privacy-policy', [PageController::class, 'privacy'])->name('en.page.privacy');

Route::get('/de/cookies', [PageController::class, 'cookies'])->name('de.page.cookies');
Route::get('/fr/cookies', [PageController::class, 'cookies'])->name('fr.page.cookies');
Route::get('/it/cookies', [PageController::class, 'cookies'])->name('it.page.cookies');
Route::get('/en/cookies', [PageController::class, 'cookies'])->name('en.page.cookies');

// 301 Redirects (old routes)
Route::get('/app', function () { return redirect('/steckdosen-kombination/app', 301); });
Route::get('/de/app', function () { return redirect('/de/steckdosen-kombination/app', 301); });
Route::get('/fr/app', function () { return redirect('/fr/steckdosen-kombination/app', 301); });
Route::get('/it/app', function () { return redirect('/it/steckdosen-kombination/app', 301); });
Route::get('/en/app', function () { return redirect('/en/steckdosen-kombination/app', 301); });
