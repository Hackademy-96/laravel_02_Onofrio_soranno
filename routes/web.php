<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/i-nostri-servizi', [PublicController::class, 'servizi'])->name('servizi');

Route::get ('/chi-siamo',[PublicController::class, 'chiSiamo'])->name('chiSiamo');

Route::get('/articoli/{articleName}',[ArticleController::class, 'article'])->name('article');
