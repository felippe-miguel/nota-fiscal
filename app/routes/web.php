<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SessaoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\NotaController;

Route::get('/', [HomeController::class, 'index']);

Route::resource('categorias', CategoriaController::class);
Route::resource('sessoes', SessaoController::class);
Route::resource('produtos', ProdutoController::class);
Route::resource('lojas', LojaController::class);
Route::resource('notas', NotaController::class);