@extends('layouts.app')
@section('content')
    <h1>Cadastrar Aluno</h1>
    <form method="POST" action="{{ route('alunos.store') }}">
        @csrf
        <input type="text" name="nome" placeholder="Nome">
        <button type="submit">Salvar</button>
    </form>
@endsection