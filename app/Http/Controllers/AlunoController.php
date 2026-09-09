<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // 1. alunos de um curso
         // dd(Aluno::where('curso', 'ADS')->get());

        // 2. nome contém uma palavra
        // dd(Aluno::where('nome', 'like', '%ana%')->get());

        // 3. cadastrados recentemente (últimos 7 dias)
        // dd(Aluno::where('created_at', '>=', now()->subDays(7))->get());

        // 4. quantidade de alunos
        //dd(Aluno::count());
        return view('alunos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
