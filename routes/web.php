<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rotas para exibir todos os produtos
Route::get('/produtos', [ProdutoController::class, 'index']);

// Rota para exibir o formulário de criação de um novo produto
Route::get('/produtos/criar', [ProdutoController::class, 'create']);

// Rota para salvar um novo produto
Route::post('/produtos', [ProdutoController::class, 'store']);

// Rota para exibir detalhes de um produto específico
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);

// Rota para exibir o formulário de edição de um produto
Route::get('/produtos/{id}/editar', [ProdutoController::class, 'edit']);

// Rota para atualizar um produto específico
Route::put('/produtos/{id}', [ProdutoController::class, 'update']);

// Rota para excluir um produto específico
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);