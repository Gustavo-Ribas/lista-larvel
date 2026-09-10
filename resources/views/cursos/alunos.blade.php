@extends('layouts.app')
@section('content')
    <h1>Alunos do curso {{ $curso->nome }}</h1>
    <ul>
        @foreach($curso->alunos as $aluno)
            <li>{{ $aluno->nome }}</li>
        @endforeach
    </ul>
@endsection