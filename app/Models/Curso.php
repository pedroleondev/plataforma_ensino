<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos'; // Nome da tabela no banco de dados

    protected $fillable = [
        'titulo',
        'descricao',
        'data_inicio',
        'data_fim',
    ];
}
