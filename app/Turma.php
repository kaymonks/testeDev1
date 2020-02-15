<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Turma extends Model
{
    protected $table = 'turmas';
    protected $primaryKey = 'id';
    protected $fillable = ['nome'];

    public function alunos()
    {
        return $this->hasMany('App\Aluno', 'turma_id', 'id');
    }
}
