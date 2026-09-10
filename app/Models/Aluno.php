<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Aluno extends Model
{
    protected $fillable = ['nome', 'curso', 'email'];
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function user()
{
    return $this->belongsTo(User::class);
}
}
