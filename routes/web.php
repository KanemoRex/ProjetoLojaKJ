<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ComparacaoController;


// Rota para a página inicial
Route::view('/', 'welcome');
// Rotas para outras páginas
Route::view('/artefatos', 'artefatos');
Route::view('/contato', 'contato');
Route::view('/login', 'login');
Route::view('/comparacao', 'comparacao',);
Route::view('/vendas', 'vendas',);
Route::view('/itens_mais_vendidos', 'itens_mais_vendidos',);


// Rota para autenticação
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');

// Rota para o gráfico de tipos
Route::get('/tipo', [ChartController::class, 'tipo'])->name('tipo');

// Remove a rota redundante /welcome, pois já está configurada como '/'
// Rota para exibir a view de comparação
Route::get('/comparacao', [ComparacaoController::class, 'comparacao'])->name('comparacao');


Route::get('/comparacao', [ComparacaoController::class, 'comparacao'])->name('comparacao');

// Rotas para exibir as views
Route::get('/vendas', function () {
    return view('vendas');
})->name('vendas');

Route::get('/itens-mais-vendidos', function () {
    return view('itens_mais_vendidos');
})->name('itens_mais_vendidos');

// Rotas para gerar os PDFs
Route::get('/relatorio-vendas', [ComparacaoController::class, 'gerarRelatorioVendas'])->name('relatorio.vendas');
Route::get('/relatorio-itens-mais-vendidos', [ComparacaoController::class, 'gerarRelatorioItensMaisVendidos'])->name('relatorio.itens_mais_vendidos');