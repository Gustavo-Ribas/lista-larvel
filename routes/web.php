<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin', function () {
    return 'Painel administrativo';
})->middleware('role:admin');

Route::get('/sobre', function () {
    return 'Esta é a página Sobre.';
});

Route::get('/contato', function () {
    return 'Fale conosco.';
});

Route::get('/produto/{id}', function ($id) {
    return "Produto número {$id}";
});

Route::get('/categoria/{id}', function ($id) {
    return "Categoria número {$id}";
});

Route::get('/usuario/{id}', function ($id) {
    return "Usuário número {$id}";
});

Route::resource('alunos', AlunoController::class);

Route::get('/cursos/{id}/alunos', [AlunoController::class, 'alunosDoCurso']);
