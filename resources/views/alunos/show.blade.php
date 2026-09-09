@extends('layouts.app')
@section('content')
    <h1>{{ $aluno->nome }}</h1>
    <p>Curso: {{ $aluno->curso }}</p>
    <p>Email: {{ $aluno->email }}</p>
@endsection