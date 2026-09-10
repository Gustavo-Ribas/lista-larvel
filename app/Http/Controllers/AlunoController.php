<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Http\Requests\AlunoRequest;
use App\Models\Curso;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(AlunoRequest $request)
    {
    Aluno::create($request->validated());
    return redirect()->route('alunos.index');
    }

    public function show(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show', compact('aluno'));
    }

    public function edit(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->only('nome', 'curso', 'email'));
        return redirect()->route('alunos.index');
    }

    public function destroy(string $id)
    {
        Aluno::destroy($id);
        return redirect()->route('alunos.index');
    }

    public function alunosDoCurso(string $id)
{
    $curso = Curso::with('alunos')->findOrFail($id);
    return view('cursos.alunos', compact('curso'));
}
}