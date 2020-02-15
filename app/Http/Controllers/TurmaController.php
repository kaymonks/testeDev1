<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Http\Requests\TurmaRequest;
use Illuminate\Http\Request;
use App\Turma;
use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\DB;

class TurmaController extends Controller
{
    public function index()
    {
        return view('turma.index');
    }

    public function obtemTurmas()
    {
        $usuario = Auth::user();
        $turmas = Turma::all() ;
        $dados = array(
            'turmas' => $turmas
        );

        return response()->json($dados);
    }

    public function adicionar()
    {
        return view('turma.adicionar');
    }

    public function salvar(TurmaRequest $request)
    {
        $dados = $request->all();

        $turma = Turma::create($dados);

        return redirect()->route('turmas')->with('success', 'Turma adicionada com sucesso');
    }

    public function editar($id)
    {
        $user_logado = Auth::user();
        $turmas = Turma::find($id);      
        $dados = Turma::find($id)->alunos;
        return view('turma.editar', compact('turmas', 'dados'));
    }

    public function atualizar(TurmaRequest $request, $id)
    {
        $dados = $request->all();

        Turma::find($id)->update($dados);

        return redirect()->route('turmas');
    }

    public function deletar($id)
    {
        Turma::find($id)->delete();
        return redirect('turmas');
    }

    public function alunos($id)
    {
        $dados = Turma::find($id)->alunos;
        return view('turma.alunos', compact('dados'));
    }
}
