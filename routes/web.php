<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::resource('alunos', AlunoController::class);

Route::get('/', function () {
    return view('welcome');
});

route :: get('/sobre', function(){
    return 'Esta é a pagina Sobre.';
});
route :: get('/contato', function(){
    return 'Fale conosco.';
});
Route::get('/cursos/{id}/alunos', [AlunoController::class, 'alunosDoCurso']);