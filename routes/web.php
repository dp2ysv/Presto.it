<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

Route::get('/', [PublicController::class,"home"])->name("home");


//Crea nuovo articolo
Route::get('/article/create',[ArticleController::class,"create"])->name("article.create")->middleware('auth');
//Salva articolo creato
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');
//Indice articoli
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
//Dettaglio articolo
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
//Filtra per categoria
Route::get('article/category/{category}', [CategoryController::class, 'categoryfilter'])->name('article.categoryfilter');
//Ricerca articoli per testo
Route::get('article/search', [ArticleController::class, 'search'])->name('article.search');

//Form approvazione articoli
Route::get('/article/review', [AdminController::class, 'review'])->name('article.review')->middleware('admin');
//Accetta articolo
Route::patch('/article/approve/{article}', [AdminController::class, 'approve'])->name('article.approve')->middleware('admin');;
//Rifiuta articolo
Route::patch('/article/reject/{article}', [AdminController::class, 'reject'])->name('article.reject')->middleware('admin');;

//Form richiesta revisore
Route::get('/user/adminrequest',[UserController::class,"adminrequest"])->name("user.adminrequest")->middleware('auth');
//Invio richiesta revisore
Route::post('/user/submit/adminrequest',[UserController::class,"submitadminrequest"])->name("user.submitadminrequest")->middleware('auth');
//Rotta per accettare richiesta revisore
Route::get('/user/acceptadminrequest/{user}', [UserController::class, 'acceptAdminRequest'])->name('user.acceptadminrequest');
//Rotta per rifiutare richiesta revisore
Route::get('/user/rejectadminrequest/{user}', [UserController::class, 'rejectAdminRequest'])->name('user.rejectadminrequest');

// Selezione Lingue
Route::post('/language/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');




