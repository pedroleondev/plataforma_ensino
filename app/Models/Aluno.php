<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    // Definir os campos que podem ser preenchidos em massa
    protected $fillable = ['nome', 'email', 'data_nascimento'];

    // Opcional: Define o tipo de cada atributo (cast)
    protected $casts = [
        'data_nascimento' => 'date', // Garante que o campo seja tratado como data
    ];
}
