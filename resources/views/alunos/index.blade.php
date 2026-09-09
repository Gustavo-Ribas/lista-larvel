@extends('layouts.app')
@section('content')
    <h1>Alunos</h1>

    @if(isset($alunos) && count($alunos) > 0)
        <ul>
            @foreach($alunos as $aluno)
                <li>{{ $aluno->nome }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum aluno cadastrado ainda.</p>
    @endif
@endsection