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