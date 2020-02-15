<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    protected $primaryKey = 'id';
    protected $fillable = ['turma_id', 'nome', 'sexo'];

    public function turmas()
    {
        return $this->belongsTo('App\Turma', 'turma_id', 'id');
    }
}
