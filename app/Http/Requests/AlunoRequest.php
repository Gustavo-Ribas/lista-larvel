<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome'  => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'email' => 'required|email|unique:alunos,email',
        ];
    }

    public function messages(): array
    {
    return [
        'nome.required'  => 'O nome é obrigatório.',
        'curso.required' => 'Informe o curso do aluno.',
        'email.required' => 'O e-mail é obrigatório.',
        'email.email'    => 'Digite um e-mail válido.',
        'email.unique'   => 'Este e-mail já está cadastrado.',
     ];
    }
}