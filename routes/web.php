<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElementController;
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


Route::get('/', [ElementController::class, 'index']);
Route::get('/elementos', [ElementController::class, 'elementos']);
Route::get('/obter-detalhes-elemento/{id}', [ElementController::class, 'obterDetalhesElemento']);
Route::put('/atualizar-elemento/{id}', [ElementController::class, 'atualizarElemento']);
Route::put('/desativar-elemento/{id}', [ElementController::class, 'desativarElemento']);
Route::delete('/deletar-elemento/{id}', [ElementController::class, 'destroy']);

Route::get('/conteudo', [ElementController::class, 'indexConteudo']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
