@extends('layouts.app')
@section('content')
    <h1>Cadastrar Aluno</h1>
    <form method="POST" action="{{ route('alunos.store') }}">
        @csrf
        <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}"><br>
        <input type="text" name="curso" placeholder="Curso" value="{{ old('curso') }}"><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        <button type="submit">Salvar</button>
    </form>
@endsection