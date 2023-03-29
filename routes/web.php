<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use App\Http\Controllers\Service;
use App\Http\Controllers\Faq;
use App\Http\Controller\Contato;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Vagas;
use App\Http\Controllers\ContactVaga;
use App\Models\Post;
use App\Http\Controllers\LocalizationController;

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

Route::get('/', [Home::class, 'home'])->name('index');
Route::get('/quem-somos', [About::class, 'about'])->name('about');
Route::get('/servicos', [Service::class, 'service']) ->name('service');
Route::get('/faq', [Faq::class, 'faq']) ->name('faq');
Route::resource('/contato', ContactController::class);
Route::get("locale/{lange}", [LocalizationController::class, 'setLang']);
Route::get('/vagas',  [Vagas::class, 'vagas'])->name('vagas');
Route::resource('/vagas/{id}', ContactVaga::class);


