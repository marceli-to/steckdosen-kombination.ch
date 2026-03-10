<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MennekesProductController;
use App\Http\Controllers\Api\DuoiProductController;
use App\Http\Controllers\Api\TrainingSubscriberController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('products/filter', [MennekesProductController::class, 'filter']);
Route::get('products/filter', [MennekesProductController::class, 'getFilterOptions']);
Route::post('training/register', [TrainingSubscriberController::class, 'store']);

Route::post('duoi/filter', [DuoiProductController::class, 'filter']);
Route::get('duoi/filter', [DuoiProductController::class, 'getFilterOptions']);
