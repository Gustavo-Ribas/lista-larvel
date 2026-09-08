<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route :: get('/sobre', function(){
    return 'Esta é a pagina Sobre.';
});
route :: get('/alunos', function(){
    return 'Lista de alunos.';
});
route :: get('/contato', function(){
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