<?php

use App\Http\Controllers\PostcodePageController;
use Illuminate\Support\Facades\Route;
use JustSteveKing\LaravelPostcodes\Rules\Postcode;
use JustSteveKing\LaravelPostcodes\Service\PostcodeService;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', PostcodePageController::class)
    ->name('pages.postcode');

Route::post('/postcode', [PostcodePageController::class, 'store'])
    ->name('pages.postcode.store');
